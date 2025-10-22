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
          <li><a href="{{ url('/profil') }}">Profil</a></li>
          <li class="selected"><a href="{{ url('/riset') }}">Riset</a></li>
        </ul>
      </div>
@endsection
@section('content')
<div id="content">
        <!-- insert the page content here -->
        <h1><b>Pusat Penelitian dan Riset Program Studi Informatika</b></h1>
        
        <h2>Overview Penelitian</h2>
        <p>Program Studi Informatika memiliki komitmen kuat dalam mengembangkan penelitian berkualitas tinggi yang berdampak pada kemajuan teknologi dan masyarakat. Dengan fokus pada inovasi dan kolaborasi interdisipliner, kami berusaha menghasilkan solusi teknologi yang dapat memecahkan permasalahan nyata di industri dan masyarakat.</p>

        <h2>Pusat Penelitian Unggulan</h2>

        <h3>1. AI Research Center</h3>
        <p><strong>Ketua Pusat:</strong> Dr. Sari Wulandari, S.Kom., M.Kom.</p>
        <p><strong>Fokus Penelitian:</strong></p>
        <ul>
            <li>Natural Language Processing untuk Bahasa Indonesia</li>
            <li>Computer Vision untuk Deteksi Objek dan Pengenalan Wajah</li>
            <li>Machine Learning untuk Prediksi dan Klasifikasi</li>
            <li>Deep Learning untuk Analisis Big Data</li>
            <li>Reinforcement Learning untuk Game AI</li>
        </ul>

        <h4>Proyek Riset Terkini:</h4>
        <ul>
            <li><strong>Smart Agriculture AI:</strong> Sistem deteksi penyakit tanaman menggunakan computer vision (2024-2026)</li>
            <li><strong>Indonesian NLP Toolkit:</strong> Pengembangan tools pemrosesan bahasa Indonesia (2023-2025)</li>
            <li><strong>Medical Image Analysis:</strong> AI untuk diagnosis radiologi (2024-2027)</li>
        </ul>

        <h3>2. Cybersecurity Excellence Lab</h3>
        <p><strong>Ketua Pusat:</strong> Prof. Dr. Ahmad Fauzi, S.T., M.T.</p>
        <p><strong>Fokus Penelitian:</strong></p>
        <ul>
            <li>Network Security dan Intrusion Detection</li>
            <li>Blockchain Security dan Smart Contract Audit</li>
            <li>Mobile Application Security</li>
            <li>Digital Forensics dan Incident Response</li>
            <li>IoT Security dan Privacy</li>
        </ul>

        <h4>Proyek Riset Terkini:</h4>
        <ul>
            <li><strong>National Cyber Defense System:</strong> Kerjasama dengan BSSN untuk keamanan nasional (2023-2026)</li>
            <li><strong>Blockchain Voting Security:</strong> Pengembangan sistem voting digital yang aman (2024-2025)</li>
            <li><strong>IoT Security Framework:</strong> Standar keamanan untuk Smart City (2024-2027)</li>
        </ul>
      </div>
@endsection