<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    function index()
    {
        return view('pengaturan.index', [
            'title' => 'Pengaturan',
            'user' => Auth::first(),
        ]);
    }

    function editSetting()
    {
        return view('pengaturan.edit', [
            'title' => 'Pengaturan',
            'user' => Auth::first(),
        ]);
    }

    function updateSetting(Request $request)
    {
        $user = Auth::first();
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        if ($request->file('profile')) {
            $oldImagePath = public_path('assets/img/pengaturan-images/' . $request->oldImage);
            unlink($oldImagePath);

            $image = $request->file('profile');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/pengaturan-images/'), $imageName);
            $validatedData['profile'] = $imageName;
        } else {
            $validatedData['profile'] = $request->oldImage;
        }

        if ($request->password) {
            $validatedData['password'] = Hash::make($request->password);
        }

        $user = Auth::first()->update($validatedData);

        if ($user) {
            return redirect(route('pengaturan-index'))->with('success', 'Berhasil Update Akun!');
        } else {
            return redirect(route('pengaturan-index'))->with('failed', 'Gagal Update Akun!');
        }
    }
}
