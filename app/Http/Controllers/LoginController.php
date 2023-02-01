<?php

namespace App\Http\Controllers;

use App\Models\fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function loginPage()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        } else {
            return view('welcome');
        }
    }

    public function login(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('dashboard');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function dashboard()
    {
        $fasilitas = fasilitas::all();
        return view('dashboard', compact('fasilitas'));
    }
    public function userFasilitas()
    {
        $fasilitas = fasilitas::all();
        return view('user.fasilitas', compact('fasilitas'));
    }
}
