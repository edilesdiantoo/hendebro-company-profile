<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

        $get_user = User::where($login_type, $request->input('login'))->first();


        if (Auth::attempt($request->only($login_type, 'password'))) {
            $request->session()->regenerate();
            Session::put($login_type, $get_user->username);
            Session::put('name', $get_user->name);
            Session::put('id', $get_user->id);
            Session::put('login', TRUE);
            return redirect()->intended('/master/user');
        }

        // // dd('berhasil login');
        // // return back()->with('loginError', 'Login Failed!');

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
