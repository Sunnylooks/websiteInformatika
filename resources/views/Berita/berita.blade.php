@extends('layout.layout')
@section('header')
         <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="{{ url('/beranda') }}">Home</a></li>
          <li><a href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
          <li class="selected"><a href="{{ url('/berita') }}">Berita</a></li>
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
        <h1><b>Berita Terkini Program Studi Informatika</b></h1>
        
        <div class="news-item">
            <h2>Pelatihan Akuntansi Digital untuk SMK Media Informatika</h2>
            <p class="news-date"><em>31 Juli 2025</em></p>
            <p>Kegiatan yang dilaksanakan pada 31 Juli 2025 ini dihadiri pula oleh Ketua Program Studi Akuntansi Matana University, Florencia Irena Lawita, S.E., M.Ak., M.M., yang memberikan dukungan penuh terhadap program pelatihan ini. Kehadiran beliau menegaskan pentingnya kolaborasi antara perguruan tinggi dan sekolah menengah kejuruan dalam menyiapkan sumber daya manusia yang kompeten di bidang akuntansi.</p>
            
            <p>Pelatihan diikuti oleh para siswa SMK Media Informatika yang antusias mempelajari penggunaan perangkat lunak akuntansi berbasis cloud. Materi pelatihan dirancang untuk membekali para siswa dengan keterampilan praktis yang relevan dengan kebutuhan dunia kerja, khususnya dalam pencatatan dan pengelolaan data keuangan menggunakan sistem modern.</p>
            
            <p>"Kami berharap pelatihan ini tidak hanya menambah pengetahuan teknis para siswa, tetapi juga memberikan gambaran nyata bagaimana teknologi dapat meningkatkan efisiensi dan akurasi dalam pekerjaan akuntansi," ujar Hotma Glorya Ika Sari dalam sesi pembukaannya.</p>
        </div>

        <div class="news-item">
            <h2>Mahasiswa Informatika Raih Juara di Kompetisi AI Nasional</h2>
            <p class="news-date"><em>15 Oktober 2025</em></p>
            <p>Tim mahasiswa Program Studi Informatika berhasil meraih juara pertama dalam Kompetisi Artificial Intelligence tingkat nasional yang diselenggarakan oleh Asosiasi Perguruan Tinggi Informatika Indonesia (APTISI). Tim yang terdiri dari Jeremy Kurniawan, Lawrence Wijaya, dan Sarah Putri berhasil mengembangkan sistem AI untuk deteksi dini penyakit tanaman.</p>
            
            <p>Proyek yang dikembangkan menggunakan teknologi computer vision dan machine learning untuk menganalisis kondisi tanaman melalui citra digital. Sistem ini mampu mendeteksi berbagai jenis penyakit pada tanaman dengan akurasi mencapai 95%.</p>
            
            <p>"Ini adalah prestasi yang membanggakan bagi program studi kami. Mahasiswa telah menunjukkan kemampuan mereka dalam mengaplikasikan teori yang dipelajari untuk menyelesaikan masalah nyata di masyarakat," ungkap Dr. Budi Santoso, Ketua Program Studi Informatika.</p>
        </div>

        <div class="news-item">
            <h2>Kerjasama Industri: Program Magang di Perusahaan Teknologi Terkemuka</h2>
            <p class="news-date"><em>5 Oktober 2025</em></p>
            <p>Program Studi Informatika menandatangani MoU dengan lima perusahaan teknologi terkemuka untuk program magang mahasiswa semester 6 dan 7. Perusahaan yang terlibat antara lain PT. Teknologi Digital Indonesia, StartupAI Corp, CloudTech Solutions, Mobile Innovation Lab, dan CyberSecurity Pro.</p>
            
            <p>Program magang ini dirancang untuk memberikan pengalaman kerja nyata kepada mahasiswa di bidang software development, data science, cybersecurity, dan mobile application development. Setiap mahasiswa akan mendapatkan mentor dari industri dan proyek riil yang berdampak pada bisnis perusahaan.</p>
        </div>
    </div>
@endsection