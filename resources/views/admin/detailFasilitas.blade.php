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
            <h4>{{$fasilita->nama}}</h4>
          </div>
          <div class="card-body p-3">
            <div class="row">

              <div class="col-lg-6">
                <div class="d-flex flex-column h-100">
                  <img src="{{ asset('fasilitasImg/'.$fasilita->img) }}" style="padding-bottom: 20px;" alt="">
                  <p class="mb-5">{{$fasilita->detail}}</p>
                  Terisi : {{$fasilita->stok}} / {{$fasilita->sisa}}
                  </a>
                </div>
              </div>
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