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
        
        <h3>Semester 1-2 (Foundation)</h3>
        <div class="curriculum-section">
            <h4>Semester 1</h4>
            <ul>
                <li>Matematika Diskrit (3 SKS)</li>
                <li>Algoritma dan Pemrograman Dasar (4 SKS)</li>
                <li>Pengantar Teknologi Informasi (3 SKS)</li>
                <li>Bahasa Inggris Teknik (2 SKS)</li>
                <li>Kalkulus I (3 SKS)</li>
                <li>Fisika Dasar (3 SKS)</li>
            </ul>
            
            <h4>Semester 2</h4>
            <ul>
                <li>Struktur Data (4 SKS)</li>
                <li>Pemrograman Berorientasi Objek (4 SKS)</li>
                <li>Sistem Digital (3 SKS)</li>
                <li>Kalkulus II (3 SKS)</li>
                <li>Statistika dan Probabilitas (3 SKS)</li>
                <li>Pancasila dan Kewarganegaraan (2 SKS)</li>
            </ul>
        </div>

        <h3>Semester 3-4 (Intermediate)</h3>
        <div class="curriculum-section">
            <h4>Semester 3</h4>
            <ul>
                <li>Basis Data (4 SKS)</li>
                <li>Sistem Operasi (3 SKS)</li>
                <li>Jaringan Komputer (3 SKS)</li>
                <li>Analisis dan Desain Algoritma (3 SKS)</li>
                <li>Rekayasa Perangkat Lunak (3 SKS)</li>
                <li>Aljabar Linear (3 SKS)</li>
            </ul>
            
            <h4>Semester 4</h4>
            <ul>
                <li>Pemrograman Web (4 SKS)</li>
                <li>Arsitektur Komputer (3 SKS)</li>
                <li>Keamanan Sistem Informasi (3 SKS)</li>
                <li>Machine Learning Dasar (3 SKS)</li>
                <li>Manajemen Proyek TI (3 SKS)</li>
                <li>Metodologi Penelitian (2 SKS)</li>
            </ul>
        </div>

        <h3>Semester 5-6 (Advanced & Specialization)</h3>
        <div class="curriculum-section">
            <h4>Semester 5</h4>
            <ul>
                <li>Artificial Intelligence (4 SKS)</li>
                <li>Mobile Application Development (4 SKS)</li>
                <li>Data Mining (3 SKS)</li>
                <li>Computer Vision (3 SKS)</li>
                <li>Cloud Computing (3 SKS)</li>
                <li>Mata Kuliah Pilihan I (3 SKS)</li>
            </ul>
            
            <h4>Semester 6</h4>
            <ul>
                <li>Deep Learning (4 SKS)</li>
                <li>Big Data Analytics (3 SKS)</li>
                <li>Internet of Things (3 SKS)</li>
                <li>Blockchain Technology (3 SKS)</li>
                <li>Mata Kuliah Pilihan II (3 SKS)</li>
                <li>Kerja Praktik (2 SKS)</li>
            </ul>
        </div>

        <h3>Semester 7-8 (Capstone & Research)</h3>
        <div class="curriculum-section">
            <h4>Semester 7</h4>
            <ul>
                <li>Tugas Akhir I (3 SKS)</li>
                <li>Ethics in Technology (2 SKS)</li>
                <li>Entrepreneurship in Tech (3 SKS)</li>
                <li>Advanced Software Engineering (3 SKS)</li>
                <li>Mata Kuliah Pilihan III (3 SKS)</li>
            </ul>
            
            <h4>Semester 8</h4>
            <ul>
                <li>Tugas Akhir II (3 SKS)</li>
                <li>Industry 4.0 Technologies (3 SKS)</li>
                <li>Digital Transformation (3 SKS)</li>
                <li>Professional Skills (2 SKS)</li>
            </ul>
        </div>

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

        <h3>3. Cybersecurity & Network</h3>
        <ul>
            <li>Ethical Hacking & Penetration Testing</li>
            <li>Network Security Management</li>
            <li>Digital Forensics</li>
            <li>Cryptography Applications</li>
            <li>Security Risk Assessment</li>
        </ul>

        <h3>4. Mobile & Game Development</h3>
        <ul>
            <li>Advanced Mobile Programming</li>
            <li>Game Engine Development</li>
            <li>AR/VR Applications</li>
            <li>Mobile UI/UX Design</li>
            <li>Cross-Platform Development</li>
        </ul>

        <h2>Program Kerjasama Industri</h2>
        
        <h3>Certified Partner Programs</h3>
        <ul>
            <li><strong>Google Cloud Academic Program:</strong> Sertifikasi cloud computing</li>
            <li><strong>AWS Academy:</strong> Cloud solutions architect training</li>
            <li><strong>Microsoft MSDN Academic Alliance:</strong> Software development tools</li>
            <li><strong>Oracle Academy:</strong> Database management certification</li>
            <li><strong>Cisco Networking Academy:</strong> Network infrastructure training</li>
        </ul>

        <h3>Industry Guest Lectures</h3>
        <p>Setiap semester menghadirkan praktisi industri untuk berbagi pengalaman:</p>
        <ul>
            <li>CTO dari unicorn startup Indonesia</li>
            <li>Senior engineers dari FAANG companies</li>
            <li>Data scientists dari fintech companies</li>
            <li>Cybersecurity experts dari consulting firms</li>
        </ul>

        <h2>Fasilitas Pembelajaran</h2>
        
        <h3>Laboratorium Khusus</h3>
        <ul>
            <li><strong>AI & Machine Learning Lab:</strong> GPU clusters, deep learning frameworks</li>
            <li><strong>Software Engineering Lab:</strong> Development environments, testing tools</li>
            <li><strong>Cybersecurity Lab:</strong> Penetration testing tools, network simulators</li>
            <li><strong>Mobile Development Lab:</strong> Various mobile devices, development kits</li>
            <li><strong>IoT & Embedded Systems Lab:</strong> Microcontrollers, sensors, prototyping boards</li>
        </ul>

        <h3>Digital Learning Resources</h3>
        <ul>
            <li>Learning Management System (LMS) terintegrasi</li>
            <li>Video lecture libraries</li>
            <li>Online coding platforms dan judge systems</li>
            <li>Digital library dengan 10,000+ e-books</li>
            <li>Subscription ke online learning platforms</li>
        </ul>

        <h2>Metode Penilaian</h2>
        
        <h3>Assessment Components</h3>
        <ul>
            <li><strong>Participation & Attendance (10%):</strong> Kehadiran dan partisipasi aktif</li>
            <li><strong>Assignments (20%):</strong> Tugas individu dan kelompok</li>
            <li><strong>Practical Projects (30%):</strong> Implementasi project programming</li>
            <li><strong>Mid-term Exam (20%):</strong> Ujian tengah semester</li>
            <li><strong>Final Exam (20%):</strong> Ujian akhir semester</li>
        </ul>

        <h3>Grading System</h3>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <tr>
                <th>Nilai</th>
                <th>Range</th>
                <th>Bobot</th>
                <th>Keterangan</th>
            </tr>
            <tr>
                <td>A</td>
                <td>85-100</td>
                <td>4.0</td>
                <td>Excellent</td>
            </tr>
            <tr>
                <td>B+</td>
                <td>80-84</td>
                <td>3.5</td>
                <td>Very Good</td>
            </tr>
            <tr>
                <td>B</td>
                <td>75-79</td>
                <td>3.0</td>
                <td>Good</td>
            </tr>
            <tr>
                <td>C+</td>
                <td>70-74</td>
                <td>2.5</td>
                <td>Above Average</td>
            </tr>
            <tr>
                <td>C</td>
                <td>65-69</td>
                <td>2.0</td>
                <td>Average</td>
            </tr>
        </table>

        <h2>Learning Outcomes</h2>
        <p>Setelah menyelesaikan program, lulusan akan mampu:</p>
        <ol>
            <li>Merancang dan mengimplementasikan solusi teknologi informasi yang kompleks</li>
            <li>Menganalisis dan memecahkan masalah menggunakan computational thinking</li>
            <li>Bekerja secara efektif dalam tim multidisiplin</li>
            <li>Berkomunikasi secara profesional dengan stakeholder teknis dan non-teknis</li>
            <li>Mengembangkan produk teknologi yang inovatif dan berdampak</li>
            <li>Menerapkan prinsip etika dalam pengembangan teknologi</li>
            <li>Belajar secara mandiri dan beradaptasi dengan teknologi baru</li>
        </ol>

        <div class="cta-section">
            <h2>Informasi Terkini</h2>
            <p>Dapatkan update terbaru mengenai kurikulum, kegiatan akademik, dan program pendidikan.</p>
            <a href="{{ url('/berita') }}" class="news-link">Baca Berita Pendidikan Terbaru</a>
        </div>
      </div>
@endsection