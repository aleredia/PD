@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container-fluid bg-primary hero-header mb-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h3 class="fw-light text-white animated slideInRight">Natural & Organic</h3>
                    <h1 class="display-4 text-white animated slideInRight">Hair <span class="fw-light text-dark">Shampoo</span> For Healthy Hair</h1>
                    <p class="text-white mb-4 animated slideInRight">Lorem ipsum dolor sit amet...</p>
                   <x-button type="dark" class="py-2 px-4 d-none d-lg-inline-block">
                    Shop Now
                    </x-button>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid animated pulse infinite" src="{{ asset('img/shampoo.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        </div>
@endsection