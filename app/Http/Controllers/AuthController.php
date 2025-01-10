<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginPage(){
        return view('auth.login');
    }
    public function showRegisterPage(){
        return view('auth.register');
    }

    //
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            // Login berhasil
            return redirect()->route('dashboard')->with('success', 'Login berhasil');
        }

        return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'li_username' => 'required',
            'job' => 'required',
            'phone' => 'required|min:10',
            'pay' => 'required|numeric|gte:100000'
        ]);

        AppUser::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
            'gender'=> $request->gender,
            'phone'=> $request->phone,
            'job'=> $request->job,
            'linkedin_username'=> $request->li_username,
            'coin'=> 100,
            'img_path'=> 'user.png'
        ]);

        Auth::attempt($request->only('email', 'password'));

    }

}
