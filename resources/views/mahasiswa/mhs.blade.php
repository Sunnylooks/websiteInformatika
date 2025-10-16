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

        <h2>Organisasi dan Kegiatan Mahasiswa</h2>
        <div class="organization-section">
            <h3>HIMAFORKA (Himpunan Mahasiswa Informatika)</h3>
            <p>Organisasi mahasiswa yang menaungi seluruh kegiatan kemahasiswaan Program Studi Informatika.</p>
            <ul>
                <li><strong>Divisi Akademik:</strong> Workshop, Seminar, Study Group</li>
                <li><strong>Divisi Minat Bakat:</strong> Kompetisi Programming, Game Development</li>
                <li><strong>Divisi Sosial:</strong> Pengabdian Masyarakat, Volunteer Programs</li>
                <li><strong>Divisi Kewirausahaan:</strong> Startup Incubator, Business Plan Competition</li>
            </ul>

            <h3>Tim Kompetisi</h3>
            <ul>
                <li><strong>ACM-ICPC Team:</strong> Tim programming competitive</li>
                <li><strong>Hackathon Squad:</strong> Tim pengembang aplikasi</li>
                <li><strong>Cybersecurity Club:</strong> Tim keamanan siber</li>
                <li><strong>AI Research Group:</strong> Tim penelitian artificial intelligence</li>
            </ul>
        </div>

        <h2>Program Pengembangan Mahasiswa</h2>
        <div class="development-programs">
            <h3>Program Magang dan Internship</h3>
            <p>Kerjasama dengan 50+ perusahaan teknologi untuk program magang:</p>
            <ul>
                <li>Google Developer Student Club</li>
                <li>Microsoft Student Partner</li>
                <li>AWS Cloud Club</li>
                <li>Startup Incubator Programs</li>
                <li>Government Digital Transformation Projects</li>
            </ul>

            <h3>Sertifikasi Internasional</h3>
            <ul>
                <li>AWS Certified Solutions Architect</li>
                <li>Google Cloud Professional</li>
                <li>Microsoft Azure Fundamentals</li>
                <li>Oracle Database Administrator</li>
                <li>Cisco Networking Associate</li>
            </ul>

            <h3>Program Entrepreneur</h3>
            <ul>
                <li>Startup Bootcamp</li>
                <li>Business Model Canvas Workshop</li>
                <li>Pitch Deck Training</li>
                <li>Investor Networking</li>
                <li>Legal Aspects of Tech Business</li>
            </ul>
        </div>

        <h2>Beasiswa dan Financial Aid</h2>
        <div class="scholarship-section">
            <h3>Beasiswa Tersedia</h3>
            <ul>
                <li><strong>Beasiswa Prestasi Akademik:</strong> Untuk mahasiswa dengan IPK ≥ 3.50</li>
                <li><strong>Beasiswa Prestasi Non-Akademik:</strong> Untuk mahasiswa berprestasi di kompetisi</li>
                <li><strong>Beasiswa Riset:</strong> Untuk mahasiswa yang aktif dalam penelitian</li>
                <li><strong>Beasiswa Sosial Ekonomi:</strong> Bantuan untuk mahasiswa kurang mampu</li>
                <li><strong>Beasiswa Exchange Program:</strong> Program pertukaran mahasiswa</li>
            </ul>
        </div>

        <h2>Alumni Success Stories</h2>
        <div class="alumni-section">
            <p><strong>Jeremy Kurniawan (2020):</strong> Software Engineer di Google Silicon Valley</p>
            <p><strong>Lawrence Wijaya (2019):</strong> Founder & CEO TechStartup Indonesia</p>
            <p><strong>Sarah Putri (2021):</strong> Data Scientist di Gojek</p>
            <p><strong>Ahmad Fauzi (2018):</strong> Cybersecurity Consultant di Deloitte</p>
        </div>

        <div class="news-section">
            <h2>BERITA TERKINI MAHASISWA</h2>
            <p>Ikuti perkembangan terbaru kegiatan dan prestasi mahasiswa Program Studi Informatika</p>
            <a href="{{ url('/mahasiswa/news') }}" class="news-link">Baca Berita Lengkap</a>
        </div>

        <h2>Kontak dan Informasi</h2>
        <div class="contact-info">
            <p><strong>Academic Advisor:</strong> Dr. Budi Santoso (budi.santoso@university.ac.id)</p>
            <p><strong>Student Affairs:</strong> Ibu Sari Wulandari (student.affairs@university.ac.id)</p>
            <p><strong>HIMAFORKA:</strong> himaforka.informatika@gmail.com</p>
            <p><strong>Hotline 24/7:</strong> +62-21-555-0123</p>
        </div>
      </div>
@endsection