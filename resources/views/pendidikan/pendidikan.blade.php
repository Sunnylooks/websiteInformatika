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
        <h1><b>Program Pendidikan Informatika</b></h1>
        
        <h2>Overview Program Studi</h2>
        <p>Program Studi Informatika menawarkan pendidikan berkualitas tinggi dengan kurikulum yang dirancang untuk menghasilkan lulusan yang kompeten di bidang teknologi informasi dan komunikasi. Program kami mengintegrasikan teori solid dengan praktik industri terkini.</p>

        <h2>Kurikulum dan Mata Kuliah</h2>
        <h2>Konsentrasi/Spesialisasi</h2>
        
        <h3>1. Artificial Intelligence & Data Science</h3>
        <ul>
            <li>Advanced Machine Learning</li>
            <li>Natural Language Processing</li>
            <li>Computer Vision Applications</li>
            <li>Data Visualization</li>
            <li>Predictive Analytics</li>
        </ul>

        <h3>2. Software Engineering & Web Development</h3>
        <ul>
            <li>Advanced Web Frameworks</li>
            <li>DevOps and CI/CD</li>
            <li>Microservices Architecture</li>
            <li>API Design and Development</li>
            <li>Software Testing & Quality Assurance</li>
</ul>

        <h3>Certified Partner Programs</h3>
        <ul>
            <li><strong>Google Cloud Academic Program:</strong> Sertifikasi cloud computing</li>
            <li><strong>AWS Academy:</strong> Cloud solutions architect training</li>
            <li><strong>Microsoft MSDN Academic Alliance:</strong> Software development tools</li>
            <li><strong>Oracle Academy:</strong> Database management certification</li>
            <li><strong>Cisco Networking Academy:</strong> Network infrastructure training</li>
        </ul>

        <div class="cta-section">
            <h2>Informasi Terkini</h2>
            <p>Dapatkan update terbaru mengenai kurikulum, kegiatan akademik, dan program pendidikan.</p>
            <a href="{{ url('/berita') }}" class="news-link">Baca Berita Pendidikan Terbaru</a>
        </div>
    </div>
@endsection