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
        <h1><b>Selamat datang di Program Studi Informatika</b></h1>
        
        <h2>Visi dan Misi</h2>
        <p><strong>Visi:</strong> Menjadi program studi informatika yang unggul dan terdepan dalam menghasilkan lulusan yang kompeten, inovatif, dan berintegritas di bidang teknologi informasi dan komunikasi.</p>
        
        <p><strong>Misi:</strong></p>
        <ul>
            <li>Menyelenggarakan pendidikan berkualitas tinggi di bidang informatika dengan kurikulum yang relevan dan up-to-date</li>
            <li>Mengembangkan penelitian dan inovasi teknologi informasi yang bermanfaat bagi masyarakat</li>
            <li>Menjalin kerjasama dengan industri dan institusi pendidikan untuk meningkatkan kualitas pembelajaran</li>
            <li>Membentuk karakter mahasiswa yang profesional dan beretika dalam pengembangan teknologi</li>
        </ul>

        <h2>Program Unggulan</h2>
        <p>Program Studi Informatika menawarkan berbagai bidang keahlian yang sesuai dengan perkembangan teknologi terkini:</p>
        
        <h3>1. Artificial Intelligence & Machine Learning</h3>
        <p>Mempelajari pengembangan sistem cerdas, pemrosesan data besar, dan algoritma pembelajaran mesin untuk solusi berbagai permasalahan industri modern.</p>
        
        <h3>2. Software Engineering</h3>
        <p>Fokus pada metodologi pengembangan perangkat lunak yang efisien, scalable, dan maintainable menggunakan framework dan teknologi terbaru.</p>
        
        <h3>3. Cybersecurity</h3>
        <p>Mengkhususkan diri pada keamanan sistem informasi, ethical hacking, dan perlindungan data digital dalam era transformasi digital.</p>
        
        <h3>4. Mobile & Web Development</h3>
        <p>Pengembangan aplikasi mobile dan web yang user-friendly dengan menggunakan teknologi frontend dan backend terbaru.</p>

        <h2>Fasilitas Unggulan</h2>
        <ul>
            <li><strong>Laboratorium Komputer Modern:</strong> Dilengkapi dengan hardware terbaru dan software berlisensi</li>
            <li><strong>Innovation Lab:</strong> Ruang khusus untuk pengembangan proyek inovasi mahasiswa</li>
            <li><strong>Server & Cloud Computing Lab:</strong> Fasilitas untuk pembelajaran teknologi cloud dan big data</li>
            <li><strong>Maker Space:</strong> Area untuk prototyping dan pengembangan IoT</li>
        </ul>

        <h2>Prestasi Terbaru</h2>
        <p>Program Studi Informatika telah meraih berbagai prestasi gemilang:</p>
        <ul>
            <li>Juara 1 Kompetisi Programming Nasional 2024</li>
            <li>Best Innovation Award pada Hackathon Regional 2024</li>
            <li>Akreditasi A dari BAN-PT</li>
            <li>Kerjasama dengan 25+ perusahaan teknologi terkemuka</li>
        </ul>

        <p><em>Bergabunglah dengan kami dan wujudkan impian menjadi profesional IT yang handal!</em></p>
        
      </div>
@endsection