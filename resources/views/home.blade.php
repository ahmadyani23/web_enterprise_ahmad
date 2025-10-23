@extends('layout.app')

@section('title', 'Inaklug - Home')

@section('content')
   
        <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-image">
            <img src="{{ asset('img/kastil.png') }}" alt="Building" class="w-100">
            <div class="hero-overlay">
                <div class="container">
                    <div class="hero-content">
                        <div class="hero-box">
                            <h1>INGIN KULIAH DAN BERKARIR<br>DI LUAR NEGERI ?</h1>
                            <a href="#" class="btn btn-hero">SELENGKAPNYA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section class="about-section" id="tentang-kami">
        <div class="container">
            <h2>TENTANG KAMI</h2>
            <p>INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah</p>
            <p>memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah, perjalanan</p>
            <p>wisata dan berkarir di negara maju di dunia.</p>
        </div>
    </section>
    
    <!-- Services Section -->
    <section class="services-section" id="layanan-kami">
        <div class="container">
            <h2>LAYANAN KAMI</h2>
            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <img src="{{ asset('img/bachelor.png') }}" alt="Studi S1 - Bachelor">
                        <div class="service-overlay">
                            <h3 class="service-title">Studi S1 - Bachelor</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <img src="{{ asset('img/s2.png') }}" alt="Studi S2 - Master">
                        <div class="service-overlay">
                            <h3 class="service-title">Studi S2 - Master</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <img src="{{ asset('img/phd.jpg') }}" alt="Studi S3 - Ph.D">
                        <div class="service-overlay">
                            <h3 class="service-title">Studi S3 - Ph.D</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Service 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <img src="{{ asset('img/kursus.png') }}" alt="Kursus Bahasa Asing">
                        <div class="service-overlay">
                            <h3 class="service-title">Kursus Bahasa Asing</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Service 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <img src="{{ asset('img/tour.png') }}" alt="Study Tour">
                        <div class="service-overlay">
                            <h3 class="service-title">Study Tour</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Service 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <img src="{{ asset('img/ausbildung.jpg') }}" alt="Ausbildung">
                        <div class="service-overlay">
                            <h3 class="service-title">Ausbildung</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Partners Section -->
    <section class="partners-section" id="mitra-kami">
        <div class="container">
            <h2>MITRA KAMI</h2>
            <div class="row g-4">
                <!-- Partner 1 -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="partner-card">
                        <img src="{{ asset('img/aviation.jpg') }}" alt="424 Aviation" class="partner-1">
                    </div>
                </div>
                
                <!-- Partner 2 -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="partner-card">
                        <img src="{{ asset('img/adrew.png') }}" alt="St. Andrew's College" class="partner-2">
                    </div>
                </div>
                
                <!-- Partner 3 -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="partner-card">
                        <img src="{{ asset('img/htw.png') }}" alt="HTW Berlin" class="partner-3">
                    </div>
                </div>
                
                <!-- Partner 4 -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="partner-card">
                        <img src="{{ asset('img/studygroup.png') }}" alt="Study Group" class="partner-4">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <div class="cta-text">
                    <h3>GRATIS KONSELING STUDI DI LUAR NEGERI</h3>
                    <p>Konsultasi Seputar Kuliah/bekerja di Luar Negeri</p>
                </div>
                <a href="#" class="btn-cta">MULAI KONSULTASI</a>
            </div>
        </div>
    </section>
    
    <!-- Articles Section -->
    <section class="articles-section" id="artikel">
        <div class="container">
            <h2>ARTIKEL TERBARU</h2>
            <div class="row g-4">
                <!-- Article 1 -->
                <div class="col-lg-5 col-md-6">
                    <div class="article-card">
                        <img src="{{ asset('img/studijerman.png') }}" alt="Article 1" class="article-image article-1">
                        <div class="article-content-1">
                            <p class="article-description">5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</p>
                        </div>
                    </div>
                </div>
                
                <!-- Article 2 -->
                <div class="col-lg-5 col-md-6">
                    <div class="article-card">
                        <img src="{{ asset('img/korona.png') }}" alt="Article 2" class="article-image article-2">
                        <div class="article-content-2">
                            <p class="article-description">Uni Eropa Menghadapi Virus Korona</p>
                        </div>
                    </div>
                </div>
                
                <!-- Article 3 -->
                <div class="col-lg-5 col-md-6">
                    <div class="article-card">
                        <img src="{{ asset('img/bahasajerman.png') }}" alt="Article 3" class="article-image article-3">
                        <div class="article-content-3">
                            <p class="article-description">Belajar Bahasa Jerman Bersama Goethe Insistut</p>
                        </div>
                    </div>
                </div>
                
                <!-- Article 4 -->
                <div class="col-lg-5 col-md-6">
                    <div class="article-card">
                        <img src="{{ asset('img/gatescambride.png') }}" alt="Article 4" class="article-image article-4">
                        <div class="article-content-4">
                            <p class="article-description">Apa Itu Gates Cambridge? Yuk Cari Tahu</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <a href="#" class="btn-more-articles">LAINNYA</a>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="contact-section" id="hubungi-kami">
        <div class="container">
            <h2>HUBUNGI KAMI</h2>
            <h3>KANTOR PUSAT</h3>
            
            <div class="contact-info">
                <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
                <p>Phone: 085286754052</p>
            </div>
            
            <div class="contact-buttons">
                <a href="#" class="btn-location">LOKASI KAMI</a>
                <a href="#" class="btn-message">KIRIM PESAN</a>
            </div>
        </div>
    </section>
    
@endsection