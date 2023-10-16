@extends('layouts.template-admin')
@section('title', 'Fasilitas')
@section('content')
<!-- Navbar -->

<!-- End Navbar -->
<div class="container-fluid py-4">
  <div class="text-center">
    <button type="button" class="btn bg-gradient-info w-100 mt-4 mb-0"><a href="/tambah-fasilitas">TAMBAH FASILITAS</a></button>
  </div><br>
  <div class="card">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0 text-center">
            <h4>Tabel Fasilitas</h4>
          </div><br>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Fasilitas</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Detail</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stok</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $d)
                  <tr>
                    <td class="align-middle text-center text-sm">
                      {{$d->id}}
                    </td>
                    <td>
                      {{$d->nama}}
                    </td>
                    <td class="align-middle text-center text-sm">
                      {{$d->detail}}
                    </td>
                    <td class="align-middle text-center">
                      {{$d->stok}}
                    </td>
                    <td class="align-middle">
                      <a href="{{ route('fasilitas.edit',$d) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
                      </a>
                    </td>
                    <td class="align-middle">
                      <form action="{{ route('fasilitas.destroy',$d) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="badge badge-sm bg-gradient-secondary text-xs">Delete</button>
                      </form>

                      </a>
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