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
<div class="container-fluid sticky-top navbar-wrapper">

    <div class="container-fluid px-5">

        <nav class="navbar navbar-expand-lg py-3 custom-navbar">

            <a href="{{ route('index') }}" class="navbar-brand">
                <h2 class="logo-text fw-bold mb-0" style="color: #001f3f;">Rare Hunt</h2>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a href="{{ route('index') }}"
                           class="nav-link px-3 fw-medium {{ request()->is('/') ? 'fw-bold' : '' }}"
                           style="color:#001f3f;">
                           Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('about') }}"
                           class="nav-link px-3 fw-medium {{ request()->is('nosotros') ? 'fw-bold' : '' }}"
                           style="color:#001f3f;">
                           Nosotros
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('product') }}"
                           class="nav-link px-3 fw-medium {{ request()->is('productos') ? 'fw-bold' : '' }}"
                           style="color:#001f3f;">
                           Productos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('contact') }}"
                           class="nav-link px-3 fw-medium {{ request()->is('contacto') ? 'fw-bold' : '' }}"
                           style="color:#001f3f;">
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
   <div class="container-fluid footer-simple bg-white border-top">
    <div class="container py-5">
        <div class="row align-items-center g-4">

            <div class="col-md-6 text-center text-md-start">
                <h5 class="footer-logo mb-1 fw-bold" style="color: #001f3f;">Rare Hunt</h5>
                <p class="text-muted small mb-0">Figuras coleccionables y artículos exclusivos.</p>
            </div>

            <div class="col-md-6 text-center text-md-end">
                <div class="d-flex justify-content-center justify-content-md-end gap-3">
                    <a href="{{ route('index') }}" 
                       class="btn btn-outline-dark px-4 py-2" 
                       style="border-radius: 50px; font-size: 0.9rem; transition: 0.3s;">
                       Inicio
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="btn btn-outline-dark px-4 py-2" 
                       style="border-radius: 50px; font-size: 0.9rem; transition: 0.3s;">
                       Contacto
                    </a>
                </div>
            </div>

        </div>

        <hr class="my-4 opactiy-25">

        <div class="text-center">
            <small class="text-muted">© 2026 <strong>Rare Hunt</strong>. Todos los derechos reservados.</small>
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
    <script>
window.addEventListener("scroll", function() {

    const navbar = document.querySelector(".navbar-wrapper");

    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }

});
</script>
</body>
</html>