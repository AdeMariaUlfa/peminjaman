@extends('layouts.template-admin')
@section('content')
<div class="card">

  <!-- End Navbar -->
  <div class="container-fluid py-4">
    <div class="row">
      <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('{{ asset('template/assets/img/curved-images/curved0.jpg') }}'); background-position-y: 50%;">
          <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
          <div class="row gx-4">
            <div class="col-auto my-auto">
              <div class="h-100">
                <h5 class="mb-1">
                  {{Auth::user()->name}}
                </h5>
                <p class="mb-0 font-weight-bold text-sm">
                  {{Auth::user()->email }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <footer class="footer pt-3"><br><br><br><br><br><br><br><br>
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
  </div>
  @endsection