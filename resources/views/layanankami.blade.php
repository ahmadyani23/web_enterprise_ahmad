@extends('layout.app')

@section('title', 'Inaklug - Layanan kami')

@section('content')

        <!-- Section 1: Hero Banner Layanan Kami -->
        <section class="tentang-hero-section">
            <div class="tentang-hero-image">
                <img src="{{ asset('img/gatescambride.png') }}" alt="Tentang Kami" class="w-100">
                <div class="tentang-hero-overlay">
                    <div class="container">
                        <h1 class="tentang-hero-title">LAYANAN KAMI</h1>
                    </div>
                </div>
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