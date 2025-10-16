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
            
            <p>Program ini diharapkan dapat meningkatkan employability mahasiswa dan memperkuat hubungan antara dunia akademis dengan industri teknologi.</p>
        </div>

        <div class="news-item">
            <h2>Workshop Internasional: "Future of Technology in Education"</h2>
            <p class="news-date"><em>28 September 2025</em></p>
            <p>Program Studi Informatika mengadakan workshop internasional dengan tema "Future of Technology in Education" yang menghadirkan pembicara dari Silicon Valley, MIT, dan Stanford University. Workshop ini membahas tren terbaru dalam educational technology dan implementasi AI dalam pembelajaran.</p>
            
            <p>Dr. Jennifer Chen dari MIT Media Lab mempresentasikan penelitian terbaru tentang adaptive learning systems, sementara Prof. Michael Rodriguez dari Stanford membahas ethics in AI education. Workshop dihadiri oleh 200 peserta dari berbagai universitas di Asia Tenggara.</p>
            
            <p>Kegiatan ini merupakan bagian dari komitmen program studi untuk tetap mengikuti perkembangan teknologi global dan mengintegrasikannya dalam kurikulum pembelajaran.</p>
        </div>

        <div class="news-item">
            <h2>Penelitian Blockchain untuk Sistem Voting Digital</h2>
            <p class="news-date"><em>20 September 2025</em></p>
            <p>Tim peneliti dari Program Studi Informatika berhasil mengembangkan prototipe sistem voting digital berbasis blockchain yang aman dan transparan. Penelitian yang dipimpin oleh Dr. Ahmad Fauzi ini telah mendapat perhatian dari Komisi Pemilihan Umum (KPU) untuk kemungkinan implementasi di masa depan.</p>
            
            <p>Sistem ini menggunakan teknologi smart contract untuk memastikan integritas data suara dan mencegah manipulasi. Dengan implementasi cryptographic hashing, setiap suara yang masuk akan terenkripsi dan tidak dapat diubah setelah terekam dalam blockchain.</p>
            
            <p>"Ini adalah langkah maju dalam digitalisasi sistem demokrasi. Teknologi blockchain memberikan jaminan transparansi dan keamanan yang sangat dibutuhkan dalam proses pemungutan suara," jelas Dr. Ahmad Fauzi.</p>
        </div>

        <div class="news-item">
            <h2>Startup Mahasiswa Mendapat Pendanaan Seed Funding</h2>
            <p class="news-date"><em>10 September 2025</em></p>
            <p>Tim startup yang didirikan mahasiswa Program Studi Informatika berhasil mendapatkan seed funding sebesar Rp 500 juta dari venture capital lokal. Startup bernama "EduTech Solutions" yang fokus pada platform pembelajaran adaptif ini didirikan oleh alumni Jeremy & Lawrence bersama dengan tim developer mahasiswa aktif.</p>
            
            <p>Platform yang dikembangkan menggunakan AI untuk mempersonalisasi pembelajaran setiap siswa berdasarkan gaya belajar dan kemampuan individu. Sistem ini telah diimplementasikan di 15 sekolah pilot dengan hasil peningkatan nilai rata-rata siswa hingga 30%.</p>
            
            <p>"Kami sangat bangga dengan pencapaian alumni dan mahasiswa kami. Ini membuktikan bahwa program studi kami berhasil menciptakan entrepreneur muda yang inovatif," kata Prof. Dr. Siti Nurhaliza, Dekan Fakultas Teknologi Informasi.</p>
        </div>

        <h2>Agenda Mendatang</h2>
        <ul>
            <li><strong>25 Oktober 2025:</strong> Seminar Nasional "Cybersecurity in Digital Era"</li>
            <li><strong>2 November 2025:</strong> Workshop Machine Learning untuk Pemula</li>
            <li><strong>15 November 2025:</strong> Career Fair IT 2025</li>
            <li><strong>1 Desember 2025:</strong> Demo Day Proyek Akhir Mahasiswa</li>
            <li><strong>10 Desember 2025:</strong> Symposium "Ethics in Artificial Intelligence"</li>
        </ul>

        <h2>Pengumuman Penting</h2>
        <div class="announcement">
            <h3>Pendaftaran Beasiswa Prestasi</h3>
            <p>Program Studi Informatika membuka pendaftaran beasiswa prestasi untuk mahasiswa berprestasi akademik dan non-akademik. Pendaftaran dibuka hingga 30 November 2025.</p>
            
            <h3>Call for Papers: Jurnal Informatika Indonesia</h3>
            <p>Jurnal Informatika Indonesia yang diterbitkan program studi membuka call for papers dengan tema "Innovation in Digital Transformation". Deadline submission: 15 Desember 2025.</p>
        </div>
      </div>
@endsection