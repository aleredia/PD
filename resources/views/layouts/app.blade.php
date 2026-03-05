<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Rare Hunt</title>
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

    <!-- NAVBAR -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light custom-navbar">

                <!-- LOGO -->
                <a href="{{ url('/') }}" class="navbar-brand">
                    <h2 class="logo-text">Rare hunt</h2>
                </a>

                <!-- MENU -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto align-items-lg-center">
                        <li class="nav-item">
                            <a href="{{ url('/') }}"
                            class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                            Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/nosotros') }}"
                            class="nav-link {{ request()->is('about') ? 'active' : '' }}">
                            Nosotros
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/productos') }}"
                            class="nav-link {{ request()->is('product') ? 'active' : '' }}">
                            Productos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/contacto') }}"
                            class="nav-link {{ request()->is('contact') ? 'active' : '' }}">
                            Contacto
                            </a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </div>

    @yield('content')

    <!--FOOTER -->
    <div class="container-fluid footer-simple">
        <div class="container py-4">
            <div class="row align-items-center">

                <div class="col-md-6 text-center text-md-start">
                    <h5 class="footer-logo mb-0">Rare Hunt</h5>
                    <small>Figuras coleccionables y artículos exclusivos.</small>
                </div>

                <div class="col-md-6 text-center text-md-end">
                    <a href="/" class="footer-link">Inicio</a>
                    <a href="/contacto" class="footer-link">Contacto</a>
                </div>

            </div>

            <hr>

            <div class="text-center">
                <small>© 2026 Rare Hunt</small>
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