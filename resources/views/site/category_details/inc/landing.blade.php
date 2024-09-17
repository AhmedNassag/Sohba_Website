<div class="container my-3 about-page-title">
    <div class="d-flex justify-content- card-small-text ps-2 mt-3  gap-2 align-items-center mb-3">
        <a href="#" class="bread-cramp mb-0">صحبة للسياحة</a>
        <p class="bread-cramp  mb-0">/</p>
        <a href="#" class="bread-cramp mb-0">صحبة للسياحة</a>
    </div>
    <h2 class="vision">
        {{ @$program->name }}
    </h2>
</div>
<div id="carouselExampleIndicators" class="carousel slide container pk-slider">
    <div class="carousel-indicators">
        @foreach ($program->getMedia('program_images') as $index => $media)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}"
                class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                aria-label="Slide {{ $index + 1 }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach ($program->getMedia('program_images') as $index => $media)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <img src="{{ $media->getUrl() }}" class="d-block w-100" alt="Slide {{ $index + 1 }}">
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
