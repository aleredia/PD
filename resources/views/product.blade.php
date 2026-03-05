@extends('layouts.app')

@section('title', 'Our Products - Hairnic')

@section('content')

    <x-hero 
        title="Nuestros Productos" 
        subtitle="Figuras coleccionables y edición limitada"
        color="#33658a"
    />
    
    <div class="container py-5">
    <div class="row g-4">

        <div class="col-lg-4">
            <x-product-card
                title="Figura Naruto"
                description="Figura edición limitada"
                price="1200"
                image="{{ asset('img/naruto.jpg') }}"
            />
        </div>
        <div class="col-lg-4">
            <x-product-card
                title="Figura Spider-Man"
                description="Coleccionable Marvel"
                price="950"
                image="{{ asset('img/spider.jpg') }}"
            />
        </div>
        <div class="col-lg-4">
            <x-product-card
                title="Figura Goku"
                description="Dragon Ball edición especial"
                price="1500"
                image="{{ asset('img/goku.jpg') }}"
            />
        </div>

        <div class="col-lg-4">
            <x-product-card
                title="Figura Goku"
                description="Dragon Ball edición especial"
                price="1500"
                image="{{ asset('img/carrito1.jpg') }}"
            />
        </div>
        <div class="col-lg-4">
            <x-product-card
                title="Figura Goku"
                description="Dragon Ball edición especial"
                price="1500"
                image="{{ asset('img/carrito2.jpg') }}"
            />
        </div>
        <div class="col-lg-4">
            <x-product-card
                title="Figura Goku"
                description="Dragon Ball edición especial"
                price="1500"
                image="{{ asset('img/carrito3.jpg') }}"
            />
        </div>
    </div>
</div>
    @endsection