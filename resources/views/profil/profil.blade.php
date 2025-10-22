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
        <h1><b>Profil Program Studi Informatika</b></h1>
        
        <h2>Tentang Program Studi</h2>
        <p>Program Studi Informatika didirikan pada tahun 2010 dengan komitmen untuk menjadi pusat keunggulan dalam pendidikan teknologi informasi dan komunikasi. Selama lebih dari satu dekade, kami telah berkembang menjadi salah satu program studi informatika terbaik di Indonesia.</p>

        <h2>Visi</h2>
        <div class="vision-box">
            <p><em>"Menjadi program studi informatika yang unggul dan terdepan dalam menghasilkan lulusan yang kompeten, inovatif, dan berintegritas di bidang teknologi informasi dan komunikasi pada tahun 2030."</em></p>
        </div>

        <h2>Misi</h2>
        <ol>
            <li>Menyelenggarakan pendidikan berkualitas tinggi di bidang informatika dengan kurikulum yang relevan, inovatif, dan mengikuti perkembangan teknologi terkini</li>
            <li>Mengembangkan penelitian dan inovasi teknologi informasi yang bermanfaat bagi masyarakat dan industri</li>
            <li>Menjalin kerjasama strategis dengan industri, pemerintah, dan institusi pendidikan dalam negeri maupun luar negeri</li>
            <li>Membentuk karakter mahasiswa yang profesional, etis, dan memiliki jiwa kepemimpinan dalam pengembangan teknologi</li>
            <li>Berkontribusi aktif dalam pengembangan masyarakat digital Indonesia</li>
        </ol>
        <h2>Prestasi dan Penghargaan</h2>
        
        <h3>Penghargaan Institusional</h3>
        <ul>
            <li><strong>2024:</strong> Best Computer Science Program - Indonesian Higher Education Awards</li>
            <li><strong>2023:</strong> Excellence in Innovation - Ministry of Education and Culture</li>
            <li><strong>2022:</strong> Outstanding Industry Partnership - APTISI (Association of Indonesian Informatics Education)</li>
            <li><strong>2021:</strong> Digital Transformation Champion - Indonesian ICT Awards</li>
        </ul>

        <h2>Lokasi</h2>
        <p>Program Studi Informatika terletak di jantung kota Jakarta dengan akses mudah ke transportasi umum. Gedung kami dilengkapi dengan fasilitas modern termasuk laboratorium berstandar internasional, auditorium berkapasitas 500 orang, dan area coworking space untuk mahasiswa.</p>
      </div>
@endsection