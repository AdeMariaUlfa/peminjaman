<?php

namespace App\Http\Controllers;

use App\Models\fasilitas;
use App\Models\peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = peminjaman::all();
        return view('admin.rekap', compact('data'));
    }
    public function peminjamaUser()
    {
        $user = Auth::user()->id;
        $data = peminjaman::where('idUser', $user)->get();
        return view('admin.rekap', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fasilitas = fasilitas::all();
        return view('user.ajukan', compact('fasilitas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'fasilitas' => 'required',
            'noWa' => 'required',
            'alamat' => 'required',
            'tujuan' => 'required',
            'tanggalPinjam' => 'required',
            'tanggalSelesai' => 'required',
        ]);

        peminjaman::create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'idFasilitas' =>  $request->input('fasilitas'),
            'idUser' => $request->input('idUser'),
            'alamat' => $request->input('alamat'),
            'tujuan' => $request->input('tujuan'),
            'status' => 'waiting',
            'noWa' => $request->input('noWa'),
            'tanggalPinjam' => $request->input('tanggalPinjam'),
            'tanggalSelesai' => $request->input('tanggalSelesai'),

        ]);
        return redirect()->route('peminjaman.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(peminjaman $peminjaman)
    {
        //
    }

    public function statusPeminjaman()
    {
        $data = peminjaman::with('fasilitas')->where('idUser', Auth::user()->id)->get();


        return view('user.status', compact('data'));
    }
    public function historyPeminjaman()
    {
        $data = peminjaman::with('fasilitas')->where('idUser', Auth::user()->id)->get();
        return view('user.history', compact('data'));
    }
}
