<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Validation\ValidationException;

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

        if ($request->remember_me) {
            Cookie::queue('remember_name', $request->name, 60);
            Cookie::queue('remember_password', $request->password, 60);
        }

        if (Auth::attempt($credentials) == true) {
            if (Auth::user()->is_admin === 1) {
                return redirect()->route('view_store');
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

    public function contactus()
    {
        return view('menu.general.contactform');
    }

    public function edit_profile(Request $request)
    {
        $user = User::find(Auth::user()->id);
        return view('menu.admin.editProfile', compact('user'));
    }

    public function update_profile(Request $request)
    {
        $profile = $request->validate([
            'nameuser' => ['required', 'max:100', 'min:3'],
            'emailuser' => ['required', 'email:dns']
        ]);

        auth()->user()->update($profile);

        return back()->with('message', 'Your profile has been updated');
    }

    public function edit_password()
    {
        return view('menu.admin.updatepassword');
    }

    public function update_password(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'min:6', 'confirmed'],

        ]);

        if (Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
            return back()->with('message', 'Your password has been updated');
        }

        throw ValidationException::withMessages([
            'current_password' => 'Your current password is incorrect',
        ]);
    }

    public function view_profile()
    {
        $user = User::where('id', auth()->user()->id)->first();
        return view('menu.admin.viewprofile', compact('user'));
    }
}
