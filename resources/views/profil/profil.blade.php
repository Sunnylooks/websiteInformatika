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
          <li class="selected"><a href="{{ url('/profil') }}">Profil</a></li>
          <li><a href="{{ url('/riset') }}">Riset</a></li>
        </ul>
      </div>
@endsection
@section('content')
<div id="content">
        <!-- insert the page content here -->
        <h1><b>Welcome to the PROFIL PAGE</b></h1>
        <p>Halaman ini berisi informasi tentang profil institusi atau individu yang terkait dengan situs ini.</p>
        <p>Anda dapat menemukan berbagai detail penting, sejarah, visi, misi, dan
        informasi relevan lainnya yang memberikan gambaran menyeluruh tentang profil tersebut.</p>
        <p>Jelajahi halaman ini untuk mendapatkan pemahaman lebih dalam tentang siapa
        kami dan apa yang kami lakukan.</p>
      </div>
@endsection