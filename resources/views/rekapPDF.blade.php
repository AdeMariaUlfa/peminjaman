<!DOCTYPE html>
<html>

<head>
  <title>Rekap</title>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>

<body>
  <h1>{{ $title }}</h1>
  <table>
    <tr>
      <th>Nama Peminjam</th>
      <th>Nama Fasilitas</th>
      <th>Status</th>
      <th>Tanggal Pinjam</th>
    </tr>
    @foreach($data as $d)
    <tr>
      <td>{{$d->nama}}</td>
      <td>{{$d->fasilitas->first()->nama}}</td>
      <td>{{$d->status}}</td>
      <td>{{$d->tanggalPinjam}}</td>
    </tr>
    @endforeach
  </table>

</body>

</html>