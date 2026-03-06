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

      
                    <x-button type="custom" class="text-white px-4 py-3 fw-bold shadow-sm" style="background-color:#001f3f;border-radius:50px;border:none;">
                        Ver Más
                    </x-button>

    </div>

</div>