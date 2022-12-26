<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title'  => 'Register',
            'active' => 'register',
        ]);
    }

    public function store(Request $request)
    {
        // return $request->all();

        $validateData = $request->validate([
            'name'     => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email'    => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        // dd('registrasi berhasil');
        // $validateData['password'] = bcrypt($validateData['password']);
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        // $request->session()->flash('success', 'Registration successfull! Please login');

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }

    // public function authenticate(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email:dns',
    //         'password' => 'required',
    //     ]);

    //     dd('berhasil login');
    // }
}
