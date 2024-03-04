<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        //apakah login valid
        // apakah status user active
        if (Auth::attempt($credentials)){
            //cek apakah user status = active
            if(Auth::user()->status != 'active'){
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                session()->flash('message', 'Akun Anda tidak aktif, silahkan
                menghubungi admin regional 5');
                session()->flash('status', 'failed');
                session()->flash('message', 'Akun Anda tidak aktif, silahkan
                meghubungi admin regional 5');
                return redirect('/login');
            }
            $request->session()->regenerate();
            if(Auth::user()->role_id == 1) {
                return redirect('dashboard');
            }
            if(Auth::user()->role_id == 2) {
                return redirect('daftar_cuti');
            }
        }
        session()->flash('status', 'failed');
        session()->flash('message', 'Login Invalid'); 
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
