@extends('layouts.template-admin')
@section('content')
<!-- Navbar -->

<!-- End Navbar -->
<div class="container-fluid py-4">
  <div class="card mb-4">
    <div class="card-header pb-0 text-center">
      <h4>Tabel User</h4>
    </div><br>
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
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-sm">John Michael</h6>
                <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">Manager</p>
            <p class="text-xs text-secondary mb-0">Organization</p>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="badge badge-sm bg-gradient-success">ACCEPT</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
          </td>
          <td class="align-middle text-center">
            <a href="path_to_file" download="proposed_file_name">Download</a>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-sm">Alexa Liras</h6>
                <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">Programator</p>
            <p class="text-xs text-secondary mb-0">Developer</p>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="badge badge-sm bg-gradient-secondary">WAITING</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
          </td>
          <td class="align-middle text-center">
            <a href="path_to_file" download="proposed_file_name">Download</a>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">Executive</p>
            <p class="text-xs text-secondary mb-0">Projects</p>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="badge badge-sm bg-gradient-danger">REJECT</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
          </td>
          <td class="align-middle text-center">
            <a href="path_to_file" download="proposed_file_name">Download</a>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-sm">Michael Levi</h6>
                <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">Programator</p>
            <p class="text-xs text-secondary mb-0">Developer</p>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="badge badge-sm bg-gradient-success">ACCEPT</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
          </td>
          <td class="align-middle text-center">
            <a href="path_to_file" download="proposed_file_name">Download</a>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-sm">Richard Gran</h6>
                <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">Manager</p>
            <p class="text-xs text-secondary mb-0">Executive</p>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="badge badge-sm bg-gradient-secondary">WAITING</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
          </td>
          <td class="align-middle text-center">
            <a href="path_to_file" download="proposed_file_name">Download</a>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-sm">Miriam Eric</h6>
                <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">Programtor</p>
            <p class="text-xs text-secondary mb-0">Developer</p>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="badge badge-sm bg-gradient-secondary">WAITING</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
          </td>
          <td class="align-middle text-center">
            <a href="path_to_file" download="proposed_file_name">Download</a>
          </td>
        </tr>
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