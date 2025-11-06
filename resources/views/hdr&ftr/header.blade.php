<header class="header-gradient">
    <div class="container-fluid header-container">
        <div class="row align-items-center w-100 mx-0">
            <div class="col-12 d-flex align-items-center justify-content-between p-0">
                <!-- Logo -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('img/inaklug.png') }}" alt="Inaklug Logo" class="logo-img">
                    <span class="brand-text">Inaklug</span>
                </a>

                <!-- Desktop Navigation - Left Side -->
                <div class="header-left d-none d-lg-flex">
                    <nav class="header-nav">
                        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                        <a href="{{ route('tentangkami') }}" class="nav-link {{ request()->routeIs('tentangkami') ? 'active' : '' }}">Tentang Kami</a>
                        <a href="{{ route('layanankami') }}" class="nav-link {{ request()->routeIs('layanankami') ? 'active' : '' }}">Layanan Kami</a>
                        <a href="{{ route('artikel') }}" class="nav-link {{ request()->routeIs('artikel') ? 'active' : '' }}">Artikel</a>
                        <a href="{{ route('hubungikami') }}" class="nav-link {{ request()->routeIs('hubungikami') ? 'active' : '' }}">Hubungi Kami</a>
                    </nav>
                </div>
                
                <!-- Desktop Navigation - Right Side -->
                <div class="header-right d-none d-lg-flex">
                    <form class="search-form" role="search" action="{{ url('/search') }}" method="GET">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="search-icon" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                        <input class="form-control search-input" type="search" name="q" placeholder="Ketik pencarian">
                    </form>
                    
                    <a href="#daftar" class="btn-daftar">Daftar On-Line</a>
                </div>

                <!-- Burger Menu Button (Tablet & Mobile) -->
                <button class="burger-menu d-lg-none" id="burgerMenu" aria-label="Toggle menu" aria-expanded="false">
                    <div class="burger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Menu Overlay -->
<div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>

<!-- =========================== MODERN MOBILE MENU SIDEBAR =============================== -->
<div class="mobile-menu" id="mobileMenu" aria-hidden="true">
    <!-- Menu Header dengan Logo dan Tombol Close -->
    <div class="mobile-menu-header">
        <div class="menu-brand">
            <div class="menu-logo">
                <!-- Gunakan logo yang sama dengan navbar -->
                <img src="{{ asset('img/inaklug.png') }}" alt="Inaklug Logo" style="width: 28px; height: 28px; object-fit: contain;">
            </div>
            <span class="menu-brand-text">Inaklug</span>
        </div>
        <button class="close-menu" id="closeMenu" aria-label="Close menu">×</button>
    </div>

    <!-- Menu Content -->
    <div class="mobile-menu-content">
        <!-- Navigation Links dengan Card Style Modern -->
        <nav class="mobile-menu-nav">
            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('tentangkami') }}" class="nav-link {{ request()->routeIs('tentangkami') ? 'active' : '' }}">Tentang Kami</a>
            <a href="{{ route('layanankami') }}" class="nav-link {{ request()->routeIs('layanankami') ? 'active' : '' }}">Layanan</a>
            <a href="{{ route('artikel') }}" class="nav-link {{ request()->routeIs('artikel') ? 'active' : '' }}">Artikel</a>
            <a href="{{ route('hubungikami') }}" class="nav-link {{ request()->routeIs('hubungikami') ? 'active' : '' }}">Hubungi Kami</a>
        </nav>

        <!-- Search Form dengan Modern Style -->
        <form class="mobile-search-form" role="search" action="{{ url('/search') }}" method="GET">
            <div class="search-input-wrapper">
                <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/>
                    <path d="m21 21-4.35-4.35"/>
                </svg>
                <input class="search-input" type="search" name="q" placeholder="Ketik pencarian">
            </div>
        </form>

        <!-- Daftar Button dengan Modern Style -->
        <a href="#daftar" class="btn-daftar">Daftar On-Line</a>

        <!-- Info Box (Optional - Bisa dihapus jika tidak perlu) -->
        <div class="menu-info-box">
            <div class="info-title">Ingin Kuliah dan Berkarir di Luar Negeri?</div>
            <div class="info-text">Konsultasikan rencana pendidikan Anda bersama kami. Hubungi sekarang!</div>
        </div>
    </div>
</div>