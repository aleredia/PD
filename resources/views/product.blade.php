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

        <div class="col-lg-3">
            <x-product-card
                title="Leon S. Kennedy"
                description="Figura Leon S. Kennedy  Resident Evil 4 Remake 33 CM"
                price="1800"
                image="{{ asset('img/leon.png') }}"
            />
        </div>
        <div class="col-lg-4">
            <x-product-card
                title="Spider-Man Integrated Suit Figure – S.H.Figuarts (No Way Home)"
                description="Figura de Spider-Man de No Way Home de la colección S.H.Figuarts de Bandai."
                price="950"
                image="{{ asset('img/spider2.png') }}"
            />
        </div>
        <div class="col-lg-4">
            <x-product-card
                title="SPY X FAMILY YOR FORGER Figura de acción a escala FIZGERO"
                description="Figura de 28 cm con 35 puntos de articulación, accesorios para diferentes poses y 3 rostros intercambiables de Yor Forger."
                price="4500"
                image="{{ asset('img/yor.png') }}"
            />
        </div>

        <div class="col-lg-4">
            <x-product-card
                title="Lambo Lp 770 Modelo Autos A Escala 1:32"
                description="Auto a escala 1:32 con diseño realista, puertas de mariposa funcionales, luces y sonido integrados. Incluye partes abatibles y base desmontable para exhibición."
                price="450"
                image="{{ asset('img/lambo.png') }}"
            />
        </div>
        <div class="col-lg-4">
            <x-product-card
                title="Tamashii Nations PROPLICA – Espada Maestra (The Legend of Zelda)"
                description="Réplica de la Espada Maestra de 42 pulgadas con efectos de sonido de The Legend of Zelda. Producto oficial de Nintendo."
                price="1315"
                image="{{ asset('img/espadaM.png') }}"
            />
        </div>
        <div class="col-lg-4">
            <x-product-card
                title="Figura Pochita Chainsaw Man"
                description="Figura de Pochita de 10 cm con acabado detallado y base de exhibición con estilo industrial."
                price="700"
                image="{{ asset('img/pochita.png') }}"
            />
        </div>
    </div>
</div>
    @endsection