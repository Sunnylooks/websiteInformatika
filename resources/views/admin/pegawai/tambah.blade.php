@extends('layout.layout_admin.layout_admin')

@section ('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
    >
        <h1 class="h2">Tambah Pegawai</h1>    
    </div>  

<!-- Form Tambah Pegawai -->
<form action="/pegawai/store" method="POST">
    {{ csrf_field() }}
<div class="mb-3">
  <label for="Nama" class="form-label">Nama Pegawai</label>
  <input type="text" class="form-control" id="nama" placeholder="Rudi" name="nama">
</div>
<div class="mb-3">
  <label for="Jabatan" class="form-label">Jabatan Pegawai</label>
  <input type="text" class="form-control" id="jabatan" placeholder="Web Developer" name="jabatan">
</div>
<div class="mb-3">
  <label for="Umur" class="form-label">Umur Pegawai</label>
  <input type="number" class="form-control" id="umur" placeholder="30" name="umur">
</div>
<div class="mb-3">
  <label for="Alamat" class="form-label">Alamat Pegawai</label>
  <textarea class="form-control" id="alamat" rows="3" placeholder="Ki. Gotong Royong No. 646, Sukabumi 30063, Sulut" name="alamat"></textarea>
</div>
<div class="d-inline-block ms-2">
<button type="submit" class="btn btn-primary">Simpan</button>
</div>
<a href="{{ url('/pegawai') }}">
<button type="button" class="btn btn-secondary">Kembali</button>
</a>
</form>

</main>
@endsection