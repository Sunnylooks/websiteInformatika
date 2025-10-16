@extends('layout.layout')
@section('header')
         <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="{{ url('/beranda') }}">Home</a></li>
          <li class="selected"><a href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
          <li><a href="{{ url('/berita') }}">Berita</a></li>
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
        <h1><b>Welcome to the MAHASISWA PAGE</b></h1>
        <p>Halaman ini berisi informasi terkini dan relevan untuk mahasiswa.</p>
        <p>Anda dapat menemukan berbagai berita, pembaruan, dan konten menarik lainnya yang relevan dengan topik yang dibahas di situs ini.</p>
        <p>Jelajahi berbagai bagian situs untuk mendapatkan informasi lebih lanjut dan tetap terkini dengan perkembangan terbaru.</p>


        <p>BERITA TERKINI TERKAIT MAHASISWA</p>
        <a href="{{ url('/mahasiswa/news') }}">NEWS</a></li>
      </div>
@endsection