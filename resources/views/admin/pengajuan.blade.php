@extends('layouts.template-admin')
@section('content')
<!-- Navbar -->

<!-- End Navbar -->
<div class="container-fluid py-4">
  <div class="card">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0 text-center">
            <h4>Tabel Pengajuan Fasilitas</h4>
          </div><br>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Peminjam</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Fasilitas Yang Dipinjam</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Peminjaman</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Surat Permohonan</th>
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
                      @if($d->status == 'setuju')
                      <span class="badge badge-sm bg-gradient-success">{{$d->status}}</span>
                      @endif
                      @if($d->status == 'tolak')
                      <span class="badge badge-sm bg-gradient-danger">{{$d->status}}</span>
                      @endif
                      @if($d->status == 'tunggu')
                      <span class="badge badge-sm bg-gradient-secondary">{{$d->status}}</span>
                      @endif
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$d->tanggalPinjam}}</span>
                    </td>
                    <td class="align-middle text-center">
                      <a class="text-secondary text-xs font-weight-bold" href="{{asset('suratPermohonan/'.$d->suratPermohonan)}}">Download</a>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <a class="badge badge-sm bg-gradient-success" href="{{route('admin.setuju',$d)}}">Setuju</a>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <a class="badge badge-sm bg-gradient-danger" href="{{route('admin.tolak',$d)}}">Tolak</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
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