@extends('layout.app')

@section('title', 'Inaklug - Artikel')

@section('content')

<!-- Hero Section dengan Background Image -->
<section class="artikel-hero-section">
    <div class="artikel-hero-image">
        <img src="{{ asset('img/diskusi.jpeg') }}" alt="Artikel" class="w-100">
        <div class="artikel-hero-overlay">
            <div class="container">
                <div class="artikel-hero-content">
                    <span class="artikel-category">TIPS</span>
                    <h1 class="artikel-hero-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri<br>dengan Beasiswa</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Articles Section (2 Cards) -->
<section class="featured-articles-section py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Article Card 1 -->
            <div class="col-md-5">
                <div class="featured-article-card">
                    <div class="featured-article-image">
                        <img src="{{ asset('img/korona.png') }}" alt="Artikel 1">
                    </div>
                    <div class="featured-article-content">
                        <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
                    </div>
                </div>
            </div>

            <!-- Article Card 2 -->
            <div class="col-md-5">
                <div class="featured-article-card">
                    <div class="featured-article-image">
                        <img src="{{ asset('img/htw.png') }}" alt="Artikel 2">
                    </div>
                    <div class="featured-article-content">
                        <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- Divider sebelum Artikel Terbaru -->
  <div class="container">
      <div class="section-divider"></div>
  </div>

  <!-- Articles List Section -->
  <section class="articles-list-section py-5">
    <div class="container">
      <!-- Section Title -->
      <h2 class="articles-section-title mb-5 text-start">Mitra Kami</h2>

      <!-- Articles List -->
      <div class="row gy-4">
        <!-- Article Item 1 -->
        <div class="col-10">
          <div class="article-list-item d-flex flex-column flex-md-row align-items-center">
            <div class="article-list-image">
              <img src="{{ asset('img/artikel1.jpg') }}" alt="Article 1" class="img-fluid w-100 rounded">
            </div>
            <div class="article-list-content ps-md-4 mt-3 mt-md-0">
              <h3 class="article-list-title">
                Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
              </h3>
              <p class="article-list-meta">Selasa, 18 Feb 2020 12:01 WIB</p>
            </div>
          </div>
        </div>

        <!-- Article Item 2 -->
        <div class="col-10">
          <div class="article-list-item d-flex flex-column flex-md-row align-items-center">
            <div class="article-list-image">
              <img src="{{ asset('img/artikel2.jpg') }}" alt="Article 2" class="img-fluid w-100 rounded">
            </div>
            <div class="article-list-content ps-md-4 mt-3 mt-md-0">
              <h3 class="article-list-title">
                Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
              </h3>
              <p class="article-list-meta">Selasa, 18 Feb 2020 12:01 WIB</p>
            </div>
          </div>
        </div>

        <!-- Article Item 3 -->
        <div class="col-10">
          <div class="article-list-item d-flex flex-column flex-md-row align-items-center">
            <div class="article-list-image">
              <img src="{{ asset('img/artikel3.jpg') }}" alt="Article 3" class="img-fluid w-100 rounded">
            </div>
            <div class="article-list-content ps-md-4 mt-3 mt-md-0">
              <h3 class="article-list-title">
                Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
              </h3>
              <p class="article-list-meta">Selasa, 18 Feb 2020 12:01 WIB</p>
            </div>
          </div>
        </div>

        <!-- Article Item 4 -->
        <div class="col-10">
          <div class="article-list-item d-flex flex-column flex-md-row align-items-center">
            <div class="article-list-image">
              <img src="{{ asset('img/artikel4.jpg') }}" alt="Article 4" class="img-fluid w-100 rounded">
            </div>
            <div class="article-list-content ps-md-4 mt-3 mt-md-0">
              <h3 class="article-list-title">
                Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
              </h3>
              <p class="article-list-meta">Selasa, 18 Feb 2020 12:01 WIB</p>
            </div>
          </div>
        </div>

        <!-- Article Item 5 -->
        <div class="col-10">
          <div class="article-list-item d-flex flex-column flex-md-row align-items-center">
            <div class="article-list-image">
              <img src="{{ asset('img/artikel5.jpg') }}" alt="Article 5" class="img-fluid w-100 rounded">
            </div>
            <div class="article-list-content ps-md-4 mt-3 mt-md-0">
              <h3 class="article-list-title">
                Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
              </h3>
              <p class="article-list-meta">Selasa, 18 Feb 2020 12:01 WIB</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Pagination -->
      <div class="artikel-pagination mt-5">
        <nav aria-label="Page navigation">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">←</span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">→</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </section>

  <!-- Divider -->
  <div class="container">
      <div class="section-divider"></div>
  </div>

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