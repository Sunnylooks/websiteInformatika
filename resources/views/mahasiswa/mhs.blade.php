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
        <h1><b>Portal Mahasiswa Program Studi Informatika</b></h1>
        
        <h2>Selamat Datang Mahasiswa!</h2>
        <p>Portal khusus untuk mahasiswa Program Studi Informatika. Di sini Anda dapat mengakses berbagai informasi akademik, kegiatan mahasiswa, dan layanan yang tersedia.</p>

        <h2>Layanan Akademik</h2>
        <div class="service-section">
            <h3>Sistem Informasi Akademik</h3>
            <ul>
                <li>Jadwal Kuliah dan Ujian</li>
                <li>Nilai dan Transkrip</li>
                <li>KRS Online</li>
                <li>Konsultasi Akademik</li>
                <li>Monitoring Kehadiran</li>
            </ul>

            <h3>Laboratorium dan Fasilitas</h3>
            <ul>
                <li>Peminjaman Laptop dan Perangkat</li>
                <li>Akses 24/7 Lab Komputer</li>
                <li>Booking Ruang Meeting</li>
                <li>Akses Cloud Server dan Database</li>
                <li>Software Berlisensi Gratis</li>
            </ul>

            <h3>Bimbingan dan Konseling</h3>
            <ul>
                <li>Konsultasi Akademik dengan Dosen PA</li>
                <li>Career Counseling</li>
                <li>Bantuan Tugas Akhir/Skripsi</li>
                <li>Mental Health Support</li>
                <li>Financial Aid Information</li>
            </ul>
        </div>
      </div>
@endsection