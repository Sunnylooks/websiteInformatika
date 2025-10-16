@extends('layout.layout')
@section('header')
         <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="{{ url('/beranda') }}">Home</a></li>
                    <li><a href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
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
        <h1><b>Selamat datang di BERANDA</b></h1>
        <p>Beranda ini adalah halaman utama yang menyajikan informasi terkini dan penting.</p>
        <p>Di sini, Anda dapat menemukan berbagai berita, pembaruan, dan konten menarik lainnya yang relevan dengan topik yang dibahas di situs ini.</p>
        <p>Jelajahi berbagai bagian situs untuk mendapatkan informasi lebih lanjut dan tetap terkini dengan perkembangan terbaru.</p>
        
      </div>
@endsection