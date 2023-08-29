<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index()
    {
        return view('auth.login', [
            'title' => 'Login',
            'logo' => Logo::first(),
        ]);
    }

    public function loginAction(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:3|max:255',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard-index'));
        } else {
            return redirect(route('login'))->with('failed', "Email atau Password Tidak Sama!");
        }
    }

    function forgotPassword()
    {
        return view('auth.forgot-password', [
            'title' => 'Forgot Password',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'))->with('logout', 'Berhasil Logout Akun!');
    }
}
