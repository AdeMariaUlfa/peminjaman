@extends('layouts.template-admin')
@section('content')
<!-- Navbar -->

<!-- End Navbar -->
<div class="container-fluid py-4">
  <div class="card mb-4">
    <div class="card-header pb-0 text-center">
      <h4>Tabel Rekap Peminjaman Fasilitas</h4>
    </div><br>
    <div class="row">
      <div class="mb-2 col-2 p-4">
        <a href="{{route('downloadPdf')}}" class="badge badge-sm bg-gradient-primary">Download Rekap</a>
      </div>
    </div>
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Peminjam</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Fasilitas Yang Dipinjam</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Peminjaman</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $d)
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-sm">{{$d->nama}}</h6>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">{{$d->fasilitas->first()->nama}}</p>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="badge badge-sm bg-gradient-warning">{{$d->status}}</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">{{$d->tanggalPinjam}}</span>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
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