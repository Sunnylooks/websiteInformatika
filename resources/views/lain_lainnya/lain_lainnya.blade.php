@extends('layout.layout')
@section('header')
         <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="{{ url('/beranda') }}">Home</a></li>
                    <li><a href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
          <li><a href="{{ url('/berita') }}">Berita</a></li>
          <li><a href="{{ url('/pendidikan') }}">Pendidikan</a></li>
          <li class="selected"><a href="{{ url('/lainnya') }}">Lainnya</a></li>
          <li><a href="{{ url('/profil') }}">Profil</a></li>
          <li><a href="{{ url('/riset') }}">Riset</a></li>
        </ul>
      </div>
@endsection
@section('content')
<div id="content">
        <!-- insert the page content here -->
        <h1><b>Informasi Tambahan Program Studi Informatika</b></h1>
        
        <h2>Layanan dan Fasilitas Pendukung</h2>
        <p>Halaman ini berisi informasi tambahan yang mendukung kehidupan akademik dan non-akademik mahasiswa Program Studi Informatika.</p>

        <h2>Fasilitas Kampus</h2>

        <h3>Perpustakaan Digital</h3>
        <ul>
            <li><strong>Koleksi Digital:</strong> 50,000+ e-books dan jurnal internasional</li>
            <li><strong>Database Akademik:</strong> IEEE Xplore, ACM Digital Library, SpringerLink</li>
            <li><strong>Software Repository:</strong> Akses ke software development tools</li>
            <li><strong>Learning Resources:</strong> Video tutorial dan online courses</li>
            <li><strong>Jam Operasional:</strong> 24/7 online access</li>
        </ul>

        <h3>Fasilitas Olahraga dan Rekreasi</h3>
        <ul>
            <li>Lapangan futsal indoor</li>
            <li>Gym dan fitness center</li>
            <li>Lapangan basket outdoor</li>
            <li>Area jogging track</li>
            <li>Gaming lounge untuk e-sports</li>
        </ul>

        <h3>Kafeteria dan Food Court</h3>
        <ul>
            <li>5 outlet makanan dengan menu beragam</li>
            <li>Coffee shop dengan WiFi kencang</li>
            <li>Area study space dengan power outlet</li>
            <li>Harga terjangkau untuk mahasiswa</li>
        </ul>

      </div>
@endsection