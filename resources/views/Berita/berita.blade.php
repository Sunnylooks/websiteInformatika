@extends('layout.layout')
@section('header')
         <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="{{ url('/beranda') }}">Home</a></li>
          <li><a href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
          <li class="selected"><a href="{{ url('/berita') }}">Berita</a></li>
          <li><a href="{{ url('/pendidikan') }}">Pendidikan</a></li>
          <li><a href="{{ url('/lainnya') }}">Lainnya</a></li>
          <li><a href="{{ url('/profil') }}">Profil</a></li>
          <li><a href="{{ url('/riset') }}">Riset</a></li>
        </ul>
      </div>
@endsection
@section('content')
<div id="content">
        <!-- insert the page content here -->
        <h1><b>Selamat datang di Berita</b></h1>
        <p>Kegiatan yang dilaksanakan pada 31 Juli 2025 ini dihadiri pula oleh Ketua Program Studi Akuntansi Matana University, Florencia Irena Lawita, S.E., M.Ak., M.M., yang memberikan dukungan penuh terhadap program pelatihan ini. Kehadiran beliau menegaskan pentingnya kolaborasi antara perguruan tinggi dan sekolah menengah kejuruan dalam menyiapkan sumber daya manusia yang kompeten di bidang akuntansi.
 
Pelatihan diikuti oleh para siswa SMK Media Informatika yang antusias mempelajari penggunaan perangkat lunak akuntansi berbasis cloud. Materi pelatihan dirancang untuk membekali para siswa dengan keterampilan praktis yang relevan dengan kebutuhan dunia kerja, khususnya dalam pencatatan dan pengelolaan data keuangan menggunakan sistem modern.</p>
    <p>“Kami berharap pelatihan ini tidak hanya menambah pengetahuan teknis para siswa, tetapi juga memberikan gambaran nyata bagaimana teknologi dapat meningkatkan efisiensi dan akurasi dalam pekerjaan akuntansi,” ujar Hotma Glorya Ika Sari dalam sesi pembukaannya.</p>
      </div>
@endsection