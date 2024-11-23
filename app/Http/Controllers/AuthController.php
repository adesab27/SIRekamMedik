<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
            return redirect()->route('indexRegistrasi')->with('success', 'Login Berhasil');
        } else {
            return redirect()->route('indexLogin')->with('error', 'Username atau Password salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('indexLogin')->with('success', 'Logout berhasil');
    }
}
