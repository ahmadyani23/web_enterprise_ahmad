<!-- Navbar with Burger Menu -->
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
                <button class="burger-menu d-lg-none" id="burgerMenu" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Menu Overlay -->
<div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>

<!-- Mobile Menu Sidebar -->
<div class="mobile-menu" id="mobileMenu">
    <!-- Navigation Links -->
    <nav class="mobile-menu-nav">
        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('tentangkami') }}" class="nav-link {{ request()->routeIs('tentangkami') ? 'active' : '' }}">Tentang Kami</a>
        <a href="{{ route('layanankami') }}" class="nav-link {{ request()->routeIs('layanankami') ? 'active' : '' }}">Layanan Kami</a>
        <a href="{{ route('artikel') }}" class="nav-link {{ request()->routeIs('artikel') ? 'active' : '' }}">Artikel</a>
        <a href="{{ route('hubungikami') }}" class="nav-link {{ request()->routeIs('hubungikami') ? 'active' : '' }}">Hubungi Kami</a>
    </nav>

    <!-- Search Form -->
    <form class="mobile-search-form search-form" role="search" action="{{ url('/search') }}" method="GET">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="search-icon" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
        <input class="form-control search-input" type="search" name="q" placeholder="Ketik pencarian">
    </form>

    <!-- Daftar Button -->
    <a href="#daftar" class="btn-daftar">Daftar On-Line</a>
</div>