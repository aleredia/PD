<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hairnic - @yield('title', 'Shampoo')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@200;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <h2 class="text-white">Hairnic</h2>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                        <a href="{{ url('/about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                        <a href="{{ url('/product') }}" class="nav-item nav-link {{ request()->is('product') ? 'active' : '' }}">Products</a>
                        {{-- 
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="#" class="dropdown-item">Features</a>
                                <a href="#" class="dropdown-item">How To Use</a>
                            </div>
                        </div> 
                        --}}
                        
                        <a href="{{ url('/contact') }}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                    </div>
                    <x-button type="dark" class="py-2 px-4 d-none d-lg-inline-block">
                            Shop Now
                    </x-button>
                </div>
            </nav>
        </div>
    </div>

    @yield('content')

    <div class="container-fluid bg-white footer">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="text-primary">Hairnic</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, NY, USA</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>