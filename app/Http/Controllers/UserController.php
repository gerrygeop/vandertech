<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use App\Models\User;

class UserController extends Controller
{
    public function profileUser()
    {
        return view('dapur.settings.profile');
    }

    public function updateInformasiUser(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'. Auth::user()->id],
        ]);

        Auth::user()->update($validated);
        return back()->with('saved-information', 'Berhasil disimpan');
    }

    public function updatePasswordUser(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ( !isset($request['current_password']) || 
            !Hash::check($request['current_password'], Auth::user()->password) 
        ) {
            return back()->with('error-password', 'Kata sandi yang diberikan tidak cocok dengan kata sandi Anda saat ini.');
        }

        Auth::user()->update(['password' => Hash::make($request['password'])]);
        return back()->with('saved-password', 'Kata sandi berhasil diperbarui.');
    }
}
