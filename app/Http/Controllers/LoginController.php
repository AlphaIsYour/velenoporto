<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth', [
            'title' => 'Login Page'
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        // Tambahkan ini untuk debug
        logger()->info('Login attempt', ['email' => $request->email]);
        
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
    
        // Tambahkan ini untuk debug
        logger()->error('Login failed', ['email' => $request->email]);
        
        return back()->with('loginError', 'Login anda gagal!');
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
