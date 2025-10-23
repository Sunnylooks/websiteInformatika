@extends('layout.layout_admin.layout_admin')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
          >
            <h1 class="h2">Table Pegawai</h1>
            <a href="{{ url('/pegawai/tambah') }}">
            <button type="button" class="btn btn-primary">Tambah Pegawai</button>
            </a>
          </div>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Umur</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($pegawai as $p)
    <tr>
      <th scope="row">{{ $p->pegawai_id }}</th>
      <td>{{ $p->pegawai_nama }}</td>
      <td>{{ $p->pegawai_alamat }}</td>
      <td>{{ $p->pegawai_umur }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
        </main>
@endsection