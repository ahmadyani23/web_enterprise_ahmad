@extends('layout.app')

@section('title', 'Inaklug - Hubungi kami')

@section('content')

        <!-- Section 1: Hero Banner Hubungi Kami -->
        <section class="hubungi-hero-section">
            <div class="hubungi-hero-image">
                <img src="{{ asset('img/becak.png') }}" alt="Hubungi" class="w-100">
                <div class="hubungi-hero-overlay">
                    <div class="container">
                        <div class="hubungi-hero-content">
                            <h1 class="hubungi-hero-title">HUBUNGI KAMI</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Form Section -->
        <section class="contact-form-section">
            <div class="container">
                <h2 class="contact-form-title">KIRIM PESAN</h2>
                
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                <form class="contact-form" action="{{ route('hubungikami.submit') }}" method="POST">
                    @csrf
                    
                    <div class="row g-4">
                        <!-- Nama -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama" class="form-label">Nama*</label>
                                <input 
                                    type="text" 
                                    class="form-control contact-input @error('nama') is-invalid @enderror" 
                                    id="nama" 
                                    name="nama" 
                                    placeholder="Nama lengkap Anda"
                                    value="{{ old('nama') }}"
                                    required
                                >
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- E-Mail -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="form-label">E-Mail*</label>
                                <input 
                                    type="email" 
                                    class="form-control contact-input @error('email') is-invalid @enderror" 
                                    id="email" 
                                    name="email" 
                                    placeholder="Alamat E-mail Anda"
                                    value="{{ old('email') }}"
                                    required
                                >
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Perusahaan / Organisasi -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="perusahaan" class="form-label">Perusahaan / Organisasi</label>
                                <input 
                                    type="text" 
                                    class="form-control contact-input" 
                                    id="perusahaan" 
                                    name="perusahaan" 
                                    placeholder="Nama Perusahaan / organisasi"
                                    value="{{ old('perusahaan') }}"
                                >
                            </div>
                        </div>

                        <!-- Telepon -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telepon" class="form-label">Telepon</label>
                                <input 
                                    type="tel" 
                                    class="form-control contact-input" 
                                    id="telepon" 
                                    name="telepon" 
                                    placeholder="Nomor telepon Anda"
                                    value="{{ old('telepon') }}"
                                >
                            </div>
                        </div>

                        <!-- Isi Pesan -->
                        <div class="col-12">
                            <div class="form-group">
                                <label for="pesan" class="form-label">Isi Pesan*</label>
                                <textarea 
                                    class="form-control contact-textarea @error('pesan') is-invalid @enderror" 
                                    id="pesan" 
                                    name="pesan" 
                                    rows="6" 
                                    placeholder="Isi pesan Anda . . ."
                                    required
                                >{{ old('pesan') }}</textarea>
                                @error('pesan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- reCAPTCHA -->
                        <div class="col-12">
                            <div class="form-group recaptcha-wrapper">
                                <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                                @error('g-recaptcha-response')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12">
                            <button type="submit" class="btn-submit-contact">KIRIM PESAN</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

            <!-- Lokasi Section -->
            <section class="lokasi-section">
                <div class="container">
                    <!-- Main Title -->
                    <h1 class="lokasi-main-title" style="white-space: nowrap;">LOKASI KAMI</h1>
                        
            <!-- Kantor Pusat -->
                <div class="lokasi-card">
                    <h2 class="lokasi-title">KANTOR PUSAT</h2>
                    <div class="lokasi-content">
                        <p class="lokasi-address">Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
                        <p class="lokasi-phone">Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701</p>
                        <p class="lokasi-hotline">Hotline: +6281519040071 / +62811998167</p>
                    </div>
                </div>

                <!-- Kantor Cabang -->
                <div class="lokasi-card">
                    <h2 class="lokasi-title">KANTOR CABANG</h2>
                    <div class="lokasi-content">
                        <p class="lokasi-address">Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
                        <p class="lokasi-phone">Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701</p>
                        <p class="lokasi-hotline">Hotline: +6281519040071 / +62811998167</p>
                    </div>
                </div>
            </div>
        </section>

@endsection

@push('scripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush