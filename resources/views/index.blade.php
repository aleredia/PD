@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- HERO -->
<div class="container-fluid home-hero">
    <div class="container">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 text-center mx-auto">
                <h1 class="display-4 text-white">Rare Hunt</h1>
                <p class="text-white mb-4">Tu pasión, nuestra colección.</p>
                
            </div>
        </div>
    </div>
</div>

<div class="hero-divider"></div>

<!-- SECCIÓN COLECCIONISTAS -->
<div class="container-fluid section-collectors">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <!-- IMAGEN -->
            <div class="col-lg-6 text-center">
                <img 
                    src="https://i.pinimg.com/1200x/ed/b0/66/edb066c254b4f29809ff97756eb09c85.jpg"
                    class="img-fluid collectors-img"
                    alt="collectibles">
            </div>
            <!-- TEXTO -->
            <div class="col-lg-6">
                <span class="section-tag">Rare Hunt</span>
                <h2 class="section-title mb-4">
                    Figuras únicas para <br>
                    verdaderos coleccionistas
                </h2>
                <p class="section-text mb-4">
                    En Rare Hunt nos especializamos en encontrar figuras, ediciones limitadas y piezas difíciles de conseguir.
                    Nuestra misión es ayudar a los coleccionistas a descubrir artículos únicos que realmente valgan la pena.
                </p>
                <x-button type="custom" class="py-2 px-4">
                    Productos
                </x-button>
            </div>
        </div>
    </div>
</div>


@endsection