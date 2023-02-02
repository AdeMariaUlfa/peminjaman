<?php

namespace App\Http\Controllers;

use App\Models\fasilitas;
use App\Models\peminjaman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

        $data = [
            'fasilitas' => fasilitas::all(),
            'fasilitasCount' => fasilitas::count(),
            'peminjamanCount' => peminjaman::where('status', 'setuju')->count(),
            'historyCount' => peminjaman::where('status', 'selesai')->count(),
        ];
        return view('dashboard', compact('data'));
    }
    public function userFasilitas()
    {
        $user = Auth::user()->id;
        $data = [
            'fasilitas' => fasilitas::all(),
            'fasilitasCount' => fasilitas::count(),
            'peminjamanCount' => peminjaman::where('idUser', $user)->where('status', 'setuju')->count(),
            'historyCount' => peminjaman::where('idUser', $user)->where('status', 'selesai')->count(),
        ];
        return view('user.fasilitas', compact('data'));
    }
    public function allUser()
    {
        $data = User::all();
        return view('admin.user', compact('data'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        User::create([
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'is_admin' => 0,

        ]);
        return redirect()->route('loginPage');
    }
}
