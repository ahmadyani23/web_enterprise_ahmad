@extends('layout.app')

@section('title', 'Inaklug - Tentang Kami')

@section('content')

<!-- Section 1: Hero Banner Tentang Kami -->
<section class="tentang-hero-section">
    <div class="tentang-hero-image">
        <img src="{{ asset('img/studytour.png') }}" alt="Tentang Kami" class="w-100">
        <div class="tentang-hero-overlay">
            <div class="container">
                <h1 class="tentang-hero-title">TENTANG KAMI</h1>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Profil Perusahaan dengan Visi Misi -->
<section class="profil-section py-5">
    <div class="container">
        <h2 class="profil-heading mb-4">Profil</h2>
        <p class="profil-text mb-5">
            Didirikan pada tahun 2018, ini membuktikan bahwa INAKLUG merupakan konsultan pendidikan internasional 
            yang berpengalaman, terbesar, terpercaya, dan juga memiliki jam terbang tinggi untuk melayani para anak-anak 
            muda Indonesia untuk menuntut ilmu di berbagai negara maju dunia.
        </p>

        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <img src="{{ asset('img/visi.png') }}" alt="Profil Inaklug" class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/misi.png') }}" alt="Tim Inaklug" class="img-fluid rounded shadow-sm">
            </div>
        </div>

        <div class="row text-start">
            <div class="col-md-6 mb-4">
                <h3 class="visi-misi-heading">Visi</h3>
                <p class="visi-misi-text">
                    Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk 
                    menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan yang 
                    tangguh, mandiri, dan profesional.
                </p>
            </div>

            <div class="col-md-6 mb-4">
                <h3 class="visi-misi-heading">Misi</h3>
                <p class="visi-misi-text">
                    Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk 
                    menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan yang 
                    tangguh, mandiri, dan profesional.
                </p>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="#" class="btn-outline-custom">Layanan Kami</a>
        </div>
    </div>
</section>


<!-- Section 3: Hubungi Kami / Contact -->
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