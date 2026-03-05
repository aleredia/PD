<div class="hero-header" style="background-color: {{ $color ?? '#273e47' }};">
    <div class="container text-center">
        <h1 class="display-4 text-white mb-3">{{ $title ?? 'Título del Hero' }}</h1>
        @if($subtitle)
            <p class="text-white mb-3">{{ $subtitle }}</p>
        @endif
    </div>
</div>