<?php

namespace App\Http\Controllers;

use App\Models\fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = fasilitas::all();
        return view('admin.fasilitas', compact('data'));
    }
    public function userFasilitas()
    {
        $data = fasilitas::all();
        return view('user.fasilitas', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah-fasilitas');
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
            'detail' => 'required',
            'img' => 'required',
            'stok' => 'required',
        ]);

        $file = $request->file('img');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $file->move('fasilitasImg', $nama_file);

        fasilitas::create([
            'nama' => $request->input('nama'),
            'detail' => $request->input('detail'),
            'img' => $nama_file,
            'sisa' => 0,
            'stok' => $request->input('stok'),

        ]);
        return redirect()->route('fasilitas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show(fasilitas $fasilita)
    {
        return view('admin.detailFasilitas',compact('fasilita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function edit(fasilitas $fasilita)
    {
        return view('admin.edit-fasilitas', compact('fasilita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fasilitas $fasilita)
    {
        $request->validate([
            'nama' => 'required',
            'detail' => 'required',
            'stok' => 'required',
        ]);

        $file = $request->file('img');
        $fasilitas = fasilitas::findOrFail($fasilita->id);
        if ($file != null) {
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move('fasilitasImg', $nama_file);



            $fasilitas->update([
                'nama' => $request->input('nama'),
                'detail' => $request->input('detail'),
                'img' => $nama_file,
                'stok' => $request->input('stok'),
            ]);
        } else {
            $fasilitas->update([
                'nama' => $request->input('nama'),
                'detail' => $request->input('detail'),
                'stok' => $request->input('stok'),
            ]);
        }
        return redirect()->route('fasilitas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(fasilitas $fasilita)
    {
        $fasilita->delete();
        return redirect()->route('fasilitas.index');
    }
}
