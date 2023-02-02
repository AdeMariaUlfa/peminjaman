@extends('layouts.template')
@section('content')
<div class="container-fluid py-4">
  <div class="card mb-4">
    <div class="card-header pb-0 text-center">
      <h4>Form Ajukan Peminjaman Fasilitas</h4>
    </div><br>
    <div class="card-body">
      <form role="form" action="{{route('peminjaman.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label>Nama Lengkap*</label>
        <input type="hidden" value="{{Auth::user()->id}}" name="idUser">
        <div class="mb-3">
          <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" aria-label="Nama" aria-describedby="email-addon">
        </div>
        <label>NIM*</label>
        <div class="mb-3">
          <input type="text" class="form-control" name="nim" placeholder="NIM" aria-label="NIM" aria-describedby="email-addon">
        </div>
        <label for="cars">Jurusan*</label>
        <div class="mb-3">
          <select name="jurusan" class="form-control">
            <option value="Teknologi Informasi">Teknologi Informasi</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Bahasa Inggris">Bahasa Inggris</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
          </select>
        </div>
        <label for="cars">Fasilitas*</label>
        <div class="mb-3">
          <select name="fasilitas" class="form-control">
            @foreach($fasilitas as $f)
            @if($f->sisa < $f->stok)
            <option value="{{$f->id}}">{{$f->nama}}</option>
            @endif
            @endforeach
          </select>
        </div>
        <label for="birthday">Tanggal Peminjaman*</label>
        <div class="mb-3">
          <input class="form-control" type="date" name="tanggalPinjam">
        </div>
        <label for="birthday">Tanggal Selesai*</label>
        <div class="mb-3">
          <input class="form-control" type="date" name="tanggalSelesai">
        </div>
        <label>No WA*</label>
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="No HP/WA" aria-label="No WA" name="noWa">
        </div>
        <label>Alamat Lengkap*</label>
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Alamat" aria-label="alamat" name="alamat">
        </div>
        <label>Tujuan Peminjaman*</label>
        <div class="mb-3">
          <textarea rows="5" cols="80" type="text" class="form-control" placeholder="Tujuan Peminjaman" name="tujuan"></textarea>
        </div>
        <label>Surat Persetujuan*</label>
            <div class="mb-3">
              <input type="file" name="suratPermohonan">
            </div>
        <div class="text-center">
          <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">AJUKAN PEMINJAMAN</button>
        </div>
      </form>
    </div>
  </div>
  <br><br>

  <footer class="footer pt-3  ">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="copyright text-center text-sm text-muted text-lg-start">
            © <script>
              document.write(new Date().getFullYear())
            </script>,
            made with <i class="fa fa-heart"></i> by
            <a>Peminjaman Fasilitas</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
@endsection