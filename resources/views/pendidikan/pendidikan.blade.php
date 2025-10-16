@extends('layout.layout')
@section('header')
         <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="{{ url('/beranda') }}">Home</a></li>
                    <li><a href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
          <li><a href="{{ url('/berita') }}">Berita</a></li>
          <li class="selected"><a href="{{ url('/pendidikan') }}">Pendidikan</a></li>
          <li><a href="{{ url('/lainnya') }}">Lainnya</a></li>
          <li><a href="{{ url('/profil') }}">Profil</a></li>
          <li><a href="{{ url('/riset') }}">Riset</a></li>
        </ul>
      </div>
@endsection
@section('content')
<div id="content">
        <!-- insert the page content here -->
        <h1><b>Welcome to the PENDIDIKAN PAGE</b></h1>
        <p>Halaman ini berisi informasi terkait pendidikan.</p>
        <p>Anda dapat menemukan berbagai konten menarik dan relevan yang berkaitan dengan topik pendidikan.</p>
        <p>Jelajahi halaman ini untuk mendapatkan wawasan lebih lanjut dan konten yang mungkin menarik bagi Anda.</p>
        <p>BERITA TERKINI TERKAIT PENDIDIKAN</p>
        <a href="{{ url('/berita') }}">NEWS</a>
      </div>
@endsection