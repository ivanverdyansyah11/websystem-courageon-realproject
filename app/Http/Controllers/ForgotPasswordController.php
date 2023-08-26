<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPasswordMail;
use App\Models\Auth;
use App\Models\Logo;
use App\Models\PasswordReset;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view('auth.forgot-password', [
            'title' => 'Forgot Password',
            'logo' => Logo::first(),
        ]);
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:auths',
        ]);

        $token = Str::random(64);

        PasswordReset::create([
            'email' => $request->email,
            'token' => $token,
        ]);

        Mail::to($request->email)->send(new ForgotPasswordMail($token));

        // Mail::send('auth.change-password', ['token' => $token], function (ForgotPasswordMail $message) use ($request) {
        //     $message->to($request->email);
        //     $message->subject('Reset Password');
        // });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }

    public function showResetPasswordForm($token)
    {
        $user = PasswordReset::where('token', $token)->first();
        if ($user) {
            return view('auth.change-password', [
                'title' => 'Change Password',
                'token' => $token,
                'user' => $user,
                'logo' => Logo::first(),
            ]);
        } else {
            return redirect()->route('login')->with('failed', 'Token Invalid');
        }
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            // 'email' => 'required|email|exists:auths',
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required'
        ]);

        $userResetPass = PasswordReset::where('token', $request->token)->first();

        $updatePassword = PasswordReset::where([
            'email' => $userResetPass->email,
            'token' => $request->token
        ])->first();

        if (!$updatePassword) {
            return back()->withInput()->with('failed', 'Invalid token!');
        }

        $auth = Auth::where('email', $userResetPass->email)
            ->update(['password' => Hash::make($request->password)]);

        PasswordReset::where(['email' => $userResetPass->email])->delete();

        return redirect(route('login'))->with('success', 'Your password has been changed!');
    }
}
