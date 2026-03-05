@extends('layouts.app')

@section('NOSOTROS')

@section('content')
    <x-hero 
        title="Nosotros" 
        subtitle="Un poco de nosotros"
        color="#33658a"
    />
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item position-relative text-center p-3" style="background-color: #bc3908;">
                        <div class="border py-5 px-3">
                            <h5 class="text-white mb-0">100% Confiables</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item position-relative text-center p-3" style="background-color: #bc3908;">
                        <div class="border py-5 px-3">
                            <h5 class="text-white mb-0">100% Originales</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item position-relative text-center p-3" style="background-color: #bc3908;">
                        <div class="border py-5 px-3">
                            <h5 class="text-white mb-0">100% Surtidos</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid animated pulse infinite" src="{{ asset('img/f1.jpg') }}">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="text-dark mb-0" style="color: #33658a !important;">Rare Hunt
                    <span class="fw-light text-dark">Seguro lo tenemos</span></h1>
                    <p class="mb-4">En Rare Hunt, no somos simples vendedores. Somos cazadores. Exploramos cada rincón del mundo del coleccionismo para localizar esas piezas esquivas, esas ediciones limitadas y esos personajes icónicos que todo fan merece tener. Desde los héroes más clásicos hasta las criaturas más oscuras, nuestra misión es tenderte una trampa... la trampa de la pieza perfecta para tu vitrina..</p>
                </div>
            </div>
        </div>
    </div>
    
    @endsection