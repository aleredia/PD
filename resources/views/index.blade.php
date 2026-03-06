@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- HERO -->
<div class="container-fluid home-hero" style="
    background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
    url('https://i.pinimg.com/1200x/db/b6/42/dbb6421eb9d1d4e3ec5df3419e1f3ba3.jpg');
    background-size: cover;
    background-position: center 25%;
    padding: 30px 0;
">

    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4 text-white fw-bold">Caza lo extraordinario.</h1>
                <p class="text-white mb-0">Explora artículos únicos, curiosidades y piezas difíciles de encontrar en cualquier otro lugar.</p>
            </div>
        </div>
    </div>

</div>

<!-- SECCIÓN COLECCIONISTAS -->
<div class="container-fluid section-collectors" style="
    background: linear-gradient(to right, rgba(255,255,255,0.3), rgba(255,255,255,0.9)),
    url('https://m.media-amazon.com/images/I/61PBAFiiM-L._AC_SL1500_.jpg');
    background-size: cover;
    background-position: top;
    min-height: 100vh;
    display: flex;
    align-items: center;
">

    <div class="container py-5">
        <div class="row align-items-center">

            <div class="col-lg-6"></div>

            <!-- TARJETA -->
            <div class="col-lg-6">

                <div style="
                    background: rgba(255,255,255,0.8);
                    backdrop-filter: blur(10px);
                    padding:40px;
                    border-radius:25px;
                    box-shadow:0 10px 30px rgba(0,0,0,0.15);
                ">
                 <h2 class="fw-bold mb-4" style="color:#001f3f;">
                        Figuras únicas para <br>
                        <span style="color:#bc3908;">verdaderos</span> coleccionistas
                    </h2>

                    <p class="text-secondary mb-4">
                        En Rare Hunt nos especializamos en encontrar figuras, ediciones limitadas y piezas difíciles de conseguir.
                        Nuestra misión es ayudarte a descubrir artículos únicos que realmente valgan la pena.
                    </p>

                    <x-button 
                        :url="route('product')" 
                        type="custom" 
                        class="text-white px-5 py-3 fw-bold shadow-sm"
                        style="background-color:#001f3f;border-radius:50px;border:none;">
                        Ver Productos
                    </x-button>

                </div>

            </div>

        </div>
    </div>

</div>

@endsection