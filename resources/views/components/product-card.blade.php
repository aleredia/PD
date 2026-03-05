@props([
    'title',
    'price',
    'image',
    'description'
])

<div class="card product-card shadow-sm border-0 h-100">

    <img src="{{ $image }}" class="card-img-top product-img" alt="{{ $title }}">

    <div class="card-body text-center">

        <h5 class="card-title">{{ $title }}</h5>

        <p class="card-text text-muted">
            {{ $description }}
        </p>

        <p class="product-price">
            ${{ $price }}
        </p>

        <x-button type="custom" class="px-4 py-2">
            Ver producto
        </x-button>

    </div>

</div>