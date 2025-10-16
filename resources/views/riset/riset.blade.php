@extends('layout.layout')
@section('header')
         <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="{{ url('/beranda') }}">Home</a></li>
                    <li><a href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
          <li><a href="{{ url('/berita') }}">Berita</a></li>
          <li><a href="{{ url('/pendidikan') }}">Pendidikan</a></li>
          <li><a href="{{ url('/lainnya') }}">Lainnya</a></li>
          <li><a href="{{ url('/profil') }}">Profil</a></li>
          <li class="selected"><a href="{{ url('/riset') }}">Riset</a></li>
        </ul>
      </div>
@endsection
@section('content')
<div id="content">
        <!-- insert the page content here -->
        <h1><b>Welcome to the RISET PAGE</b></h1>
        <p>Halaman ini berisi informasi tentang riset dan penelitian yang dilakukan oleh institusi atau individu terkait.</p>
        <p>Anda dapat menemukan berbagai detail penting, hasil penelitian, publikasi, dan informasi relevan lainnya yang memberikan gambaran menyeluruh tentang kegiatan riset tersebut.</p>
        <p>Jelajahi halaman ini untuk mendapatkan pemahaman lebih dalam tentang riset yang sedang dilakukan dan kontribusi yang diberikan.</p>

      </div>
@endsection