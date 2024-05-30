<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password wajib diisi',
        ]);

        $logininfo = [
            'email' =>$request->email,
            'password' =>$request->password,
        ];
        Log::info('Attempting login with:', $logininfo);
        if(Auth::attempt($logininfo)){
            Log::info('Login successful for email: ' . $request->email);
            return redirect('/dashboard')->with('success', 'Berhasil Login');
        }else{
            Log::error('Login failed for email: ' . $request->email);
            return redirect('/')->withErrors('Email atau Password Salah');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/')->with('alert', 'Berhasil Logout');
    }

    public function register(Request $request)
    {
        return view('register');
    }

    public function create(Request $request)
    {
        Session::flash('email', $request->email);
        Session::flash('username', $request->username);

        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ],[
            'username.required' => 'Username wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah digunakan',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password harus terdiri dari 6 karakter atau lebih',
        ]);

        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        
        User::create($data);

        $logininfo = [
            'email' =>$request->email,
            'password' =>$request->password,
        ];

        Log::info('Attempting login with:', $logininfo);
        
        if(Auth::attempt($logininfo)){
            Log::info('Login successful for email: ' . $request->email);
            return redirect('/dashboard')->with('success', Auth::user()->username . 'Berhasil Login ');
        }else{
            Log::error('Login failed for email: ' . $request->email);
            return redirect('/')->withErrors('Email atau Password Salah');
        }
    }
}
