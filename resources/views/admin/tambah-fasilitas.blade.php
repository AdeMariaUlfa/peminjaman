@extends('layouts.template-admin')
@section('content')
 <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Fasilitas</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Tambah Fasilitas</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
           
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">(Nama User)</span>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="card">
      <div class="row">
      <div class="col-12">
        <div class="card-header pb-0 text-center">
          <h4>Tambah Fasilitas</h4>
        </div><br>
        <div class="card-body">
                  <form role="form">
                    <label>Nama*</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Nama" aria-describedby="email-addon">
                    </div>
                    <label>Detail*</label>
                    <div class="mb-3">
                      <textarea rows="5" cols="80" type="text" class="form-control" placeholder="Tujuan Peminjaman" aria-label="Nama" aria-describedby="email-addon"></textarea>
                    </div>
                    <label>Choose a picture*</label>
                    <div class="mb-3">
                      <input <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
                    </div>
                    <label>Tanggal Peminjaman*</label>
                    <div class="mb-3">
                      <input type="date" class="form-control" placeholder="Nama Lengkap" aria-label="Nama" aria-describedby="email-addon">
                    </div>
                    <label>Tanggal Berakhir Peminjaman*</label>
                    <div class="mb-3">
                      <input type="date" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn bg-gradient-info w-100 mt-4 mb-0">AJUKAN PEMINJAMAN</button>
                    </div>
                  </form>
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