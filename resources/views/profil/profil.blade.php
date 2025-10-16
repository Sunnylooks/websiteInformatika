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

        <h2>Sejarah dan Pencapaian</h2>
        
        <h3>Timeline Perkembangan</h3>
        <div class="timeline">
            <h4>2010 - Pendirian Program Studi</h4>
            <p>Program Studi Informatika resmi didirikan dengan 25 mahasiswa angkatan pertama dan 8 dosen tetap.</p>
            
            <h4>2013 - Akreditasi Pertama</h4>
            <p>Meraih akreditasi B dari BAN-PT untuk pertama kalinya, menandai pengakuan kualitas pendidikan.</p>
            
            <h4>2016 - Kerjasama Internasional</h4>
            <p>Menjalin kerjasama dengan University of Technology Sydney (UTS) untuk program student exchange.</p>
            
            <h4>2018 - Upgrade Akreditasi</h4>
            <p>Berhasil meraih akreditasi A dari BAN-PT, menunjukkan peningkatan kualitas yang signifikan.</p>
            
            <h4>2020 - Transformasi Digital</h4>
            <p>Implementasi full online learning dan smart campus system di masa pandemi.</p>
            
            <h4>2022 - Research Excellence</h4>
            <p>Mendirikan 3 pusat penelitian: AI Research Center, Cybersecurity Lab, dan Software Engineering Institute.</p>
            
            <h4>2024 - Industry 4.0 Integration</h4>
            <p>Peluncuran kurikulum Industry 4.0 dengan fokus pada AI, IoT, dan blockchain technology.</p>
        </div>

        <h2>Tim Kepemimpinan</h2>
        
        <div class="leadership-team">
            <h3>Ketua Program Studi</h3>
            <div class="profile-card">
                <h4>Dr. Budi Santoso, S.Kom., M.T.</h4>
                <p><strong>Spesialisasi:</strong> Software Engineering, Human-Computer Interaction</p>
                <p><strong>Pendidikan:</strong> Ph.D. Computer Science - National University of Singapore</p>
                <p><strong>Pengalaman:</strong> 15 tahun di industri teknologi, 10 tahun di akademis</p>
                <p><strong>Publikasi:</strong> 45+ paper di jurnal internasional, 3 buku teks</p>
            </div>

            <h3>Sekretaris Program Studi</h3>
            <div class="profile-card">
                <h4>Dr. Sari Wulandari, S.Kom., M.Kom.</h4>
                <p><strong>Spesialisasi:</strong> Data Science, Machine Learning</p>
                <p><strong>Pendidikan:</strong> Ph.D. Data Science - University of Melbourne</p>
                <p><strong>Pengalaman:</strong> 12 tahun penelitian AI, 8 tahun pengalaman industri</p>
                <p><strong>Prestasi:</strong> Best Paper Award IEEE Conference 2023</p>
            </div>

            <h3>Koordinator Akademik</h3>
            <div class="profile-card">
                <h4>Prof. Dr. Ahmad Fauzi, S.T., M.T.</h4>
                <p><strong>Spesialisasi:</strong> Cybersecurity, Network Security</p>
                <p><strong>Pendidikan:</strong> Ph.D. Information Security - ETH Zurich</p>
                <p><strong>Pengalaman:</strong> 20 tahun di bidang keamanan siber</p>
                <p><strong>Sertifikasi:</strong> CISSP, CEH, CISM</p>
            </div>
        </div>

        <h2>Prestasi dan Penghargaan</h2>
        
        <h3>Penghargaan Institusional</h3>
        <ul>
            <li><strong>2024:</strong> Best Computer Science Program - Indonesian Higher Education Awards</li>
            <li><strong>2023:</strong> Excellence in Innovation - Ministry of Education and Culture</li>
            <li><strong>2022:</strong> Outstanding Industry Partnership - APTISI (Association of Indonesian Informatics Education)</li>
            <li><strong>2021:</strong> Digital Transformation Champion - Indonesian ICT Awards</li>
        </ul>

        <h3>Prestasi Mahasiswa (2023-2024)</h3>
        <ul>
            <li>Juara 1 ACM-ICPC Asia Jakarta Regional Contest</li>
            <li>Best Innovation Award - Indonesia Technology Expo</li>
            <li>Winner Google Developer Student Club Solution Challenge</li>
            <li>1st Place National Cybersecurity Competition</li>
            <li>Microsoft Imagine Cup Indonesia Finalist</li>
        </ul>

        <h2>Data dan Statistik</h2>
        
        <div class="statistics">
            <h3>Mahasiswa</h3>
            <ul>
                <li><strong>Total Mahasiswa Aktif:</strong> 1,250 mahasiswa</li>
                <li><strong>Mahasiswa Baru per Tahun:</strong> 200-250 mahasiswa</li>
                <li><strong>Tingkat Kelulusan:</strong> 95% (tepat waktu: 85%)</li>
                <li><strong>IPK Rata-rata Lulusan:</strong> 3.45</li>
            </ul>

            <h3>Dosen dan Staff</h3>
            <ul>
                <li><strong>Dosen Tetap:</strong> 28 orang (15 S3, 13 S2)</li>
                <li><strong>Dosen Tamu/Praktisi:</strong> 12 orang</li>
                <li><strong>Rasio Dosen:Mahasiswa:</strong> 1:45</li>
                <li><strong>Dosen dengan Sertifikasi Internasional:</strong> 20 orang</li>
            </ul>

            <h3>Lulusan dan Karir</h3>
            <ul>
                <li><strong>Total Alumni:</strong> 2,100+ lulusan</li>
                <li><strong>Employment Rate:</strong> 96% dalam 6 bulan setelah lulus</li>
                <li><strong>Rata-rata Starting Salary:</strong> Rp 8,5 juta/bulan</li>
                <li><strong>Alumni di Perusahaan Top Tier:</strong> 150+ orang</li>
            </ul>
        </div>

        <h2>Kemitraan Strategis</h2>
        
        <h3>Kemitraan Industri</h3>
        <div class="partnership-grid">
            <h4>Technology Giants</h4>
            <ul>
                <li>Google (Cloud Partner, Android Developer Program)</li>
                <li>Microsoft (Academic Partner, Azure for Education)</li>
                <li>Amazon Web Services (AWS Academy)</li>
                <li>Oracle (Database Academy)</li>
                <li>IBM (Academic Initiative)</li>
            </ul>

            <h4>Local Tech Companies</h4>
            <ul>
                <li>Gojek (Software Engineering Internship)</li>
                <li>Tokopedia (Product Development Partnership)</li>
                <li>Traveloka (Data Science Research)</li>
                <li>Bukalapak (Mobile Development)</li>
                <li>OVO (Fintech Security Research)</li>
            </ul>

            <h4>International Universities</h4>
            <ul>
                <li>University of Technology Sydney (Student Exchange)</li>
                <li>National University of Singapore (Research Collaboration)</li>
                <li>University of Melbourne (Joint Research Program)</li>
                <li>Nanyang Technological University (Faculty Exchange)</li>
            </ul>
        </div>

        <h2>Pusat Penelitian</h2>
        
        <h3>AI Research Center</h3>
        <p>Fokus pada pengembangan artificial intelligence untuk aplikasi industri dan sosial, termasuk natural language processing, computer vision, dan predictive analytics.</p>

        <h3>Cybersecurity Excellence Lab</h3>
        <p>Pusat penelitian keamanan siber yang mengembangkan solusi security untuk enterprise dan pemerintahan, serta melakukan penetration testing dan digital forensics.</p>

        <h3>Software Engineering Institute</h3>
        <p>Mengembangkan metodologi dan tools untuk software development yang efisien, scalable architecture, dan quality assurance practices.</p>

        <h2>Kontak</h2>
        <div class="contact-info">
            <p><strong>Alamat:</strong> Gedung Teknologi Informasi Lt. 3<br>
            Jl. Pendidikan No. 123, Jakarta Selatan 12345</p>
            
            <p><strong>Telepon:</strong> +62-21-555-0123<br>
            <strong>Fax:</strong> +62-21-555-0124<br>
            <strong>Email:</strong> informatika@university.ac.id</p>
            
            <p><strong>Website:</strong> www.informatika.university.ac.id<br>
            <strong>Media Sosial:</strong><br>
            - Instagram: @informatika_univ<br>
            - LinkedIn: Program Studi Informatika<br>
            - YouTube: Informatika Channel</p>
        </div>

        <h2>Lokasi</h2>
        <p>Program Studi Informatika terletak di jantung kota Jakarta dengan akses mudah ke transportasi umum. Gedung kami dilengkapi dengan fasilitas modern termasuk laboratorium berstandar internasional, auditorium berkapasitas 500 orang, dan area coworking space untuk mahasiswa.</p>
      </div>
@endsection