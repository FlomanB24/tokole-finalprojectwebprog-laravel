<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function register()
    {
        return view('registrasi.registrasi');
    }

    public function reg_validate(Request $request)
    {
        $request->validate([
            'nameuser' => ['required', 'max:150', 'min:5'],
            'emailuser' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:8'],
            'confirm_password' => ['required', 'min:8', 'same:password'],
        ]);

        User::create([
            'nameuser' => $request->nameuser,
            'emailuser' => $request->emailuser,
            'password' => Hash::make($request->password),
            'is_admin' => true
        ]);

        return redirect()->route('home')->with('success', 'Register Success');
    }

    public function login()
    {
        return view('login.login');
    }

    public function auth_login(Request $request)
    {
        $credentials = [
            'nameuser' => $request->name,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials) == true) {
            if (Auth::user()->is_admin === 1) {
                return redirect()->route('view_product');
            }
        } else {
            return redirect()->route('homepage')->with('failed', 'Email or Password Failed');
        }
    }

    public function about()
    {
        return view('menu.general.about');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('homepage');
    }

    public function aboutus()
    {
        return view('menu.general.aboutus');
    }
}
