<?php

namespace App\Http\Controllers;

use App\Models\fasilitas;
use App\Models\peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;


class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = peminjaman::with('fasilitas')->whereNotIn('status', ['selesai'])->get();
        return view('admin.pengajuan', compact('data'));
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
            'jurusan' => 'required',
            'fasilitas' => 'required',
            'noWa' => 'required',
            'alamat' => 'required',
            'tujuan' => 'required',
            'tanggalPinjam' => 'required',
            'tanggalSelesai' => 'required',
            'suratPermohonan' => 'required'
        ]);

        $file = $request->file('suratPermohonan');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $file->move('suratPermohonan', $nama_file);

        peminjaman::create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'jurusan' => $request->input('jurusan'),
            'idFasilitas' =>  $request->input('fasilitas'),
            'idUser' => $request->input('idUser'),
            'alamat' => $request->input('alamat'),
            'tujuan' => $request->input('tujuan'),
            'status' => 'tunggu',
            'noWa' => $request->input('noWa'),
            'tanggalPinjam' => $request->input('tanggalPinjam'),
            'tanggalSelesai' => $request->input('tanggalSelesai'),
            'suratPermohonan' => $nama_file,

        ]);
        return redirect()->route('user.status');
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
        $data = peminjaman::with('fasilitas')->where('idUser', Auth::user()->id)->whereNotIn('status', ['selesai'])->get();
        return view('user.status', compact('data'));
    }
    public function historyPeminjaman()
    {
        $data = peminjaman::with('fasilitas')->where('idUser', Auth::user()->id)->where('status', 'selesai')->get();
        return view('user.history', compact('data'));
    }
    public function rekapAdmin()
    {
        $data = peminjaman::with('fasilitas')->where('status', 'selesai')->get();
        return view('admin.rekap', compact('data'));
    }
    public function setuju(peminjaman $peminjaman)
    {
        $data = peminjaman::find($peminjaman->id);
        $fasilitas = fasilitas::find($peminjaman->idFasilitas);
        $tambah = $fasilitas->sisa + 1;
        $fasilitas->update([
            'sisa' => $tambah
        ]);
        $data->update([
            'status' => 'setuju'
        ]);
        return redirect()->route('peminjaman.index');
    }
    public function tolak(peminjaman $peminjaman)
    {
        $peminjaman = peminjaman::find($peminjaman->id);

        $peminjaman->update([
            'status' => 'tolak'
        ]);


        return redirect()->route('peminjaman.index');
    }
    public function selesai(peminjaman $peminjaman)
    {
        $data = peminjaman::find($peminjaman->id);
        $fasilitas = fasilitas::find($peminjaman->idFasilitas);
        $data->update([
            'status' => 'selesai'
        ]);
        $kurang = $fasilitas->sisa - 1;
        $fasilitas->update([
            'sisa' => $kurang
        ]);
        return redirect()->back();
    }
    public function downloadPdf()
    {
        $data = [
            'title' => 'Rekap Data Peminjaman',
            'data' => peminjaman::with('fasilitas')->get(),
        ];
          
        $pdf = Pdf::loadView('rekapPDF', $data);
    
        return $pdf->download('rekap.pdf');
    }
}
