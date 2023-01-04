<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login', [ // titik masuk ke folder
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        // $credentials = $request->validate([
        //     'login' => 'required', // :dns itu untuk login lebih scure
        //     'password' => 'required',
        // ]);

        $this->validate($request, [
            'login'    => 'required',
            'password' => 'required',
        ]);

        $login_type = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL)
            ? 'email'
            : 'username';

        $request->merge([
            $login_type => $request->input('login')
        ]);



        if (Auth::attempt($request->only($login_type, 'password'))) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        // dd('berhasil login');
        // return back()->with('loginError', 'Login Failed!');
        return redirect()->back()
            ->withInput()
            ->withErrors([
                'login' => 'email atau username salah!',
            ]);
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
