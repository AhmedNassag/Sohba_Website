{{-- <div class="container d-flex justify-content-center mx-auto mt-5 mb-0 about-page-title" id="about-us">
    <div class="w-100 about-ct"><span></span>
        <h1 class="register-title mt-4 text-center">
            الخدمات السياحة </h1>
        <div class="row">


            @foreach ($services as $key => $one)
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.4s"
                    style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                    <div class="feature_home position-relative">
                        <img src="{{ $one->getFirstMediaUrl('service_image') }}" height="65" alt="{{ $one->name }}">

                        <h3>{{ $one->name }}</h3>
                        <p class="position-absolute top-0 bottom-0 start-0 end-0 bg-white d-flex align-items-center mb-0 px-4 serv-desc1"
                            style="font-size: 12px;">
                            {{ $one->short_description }}
                        </p>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div> --}}











<div class="container-xxl mx-auto my align-content-center aboutUsContainer about-page-title">
    <div class="d-flex justify-content- card-small-text ps-2 mt-3  gap-2 align-items-center mb-3">
        {{-- {{ Bre adcrumbs::render('services') }} --}}
    </div>
    @foreach ($services as $key => $section)
    <div class="row {{ $key % 2 == 1 ? 'd-flex flex-md-row-reverse flex-column' : '' }}">
        <div class="col-lg-4">
            <img src="{{ $section->getFirstMediaUrl('service_image', 'thumb') }}" alt="" style="width: 100%;">
        </div>
        <div class="col-lg-8 px-lg-4 d-flex flex-column justify-content-center">
            <h2 class="slide-desc mt-4">{{ $section->name }}</h2>
            <p class="vision ">{{ $section->short_description }}</p>
            <p class="carosel-desc w-100" style="text-align: justify;">
                {{ $section->description }}
            </p>
        </div>
    </div>

    @if (!$loop->last)
        <div class="divider container mx-auto my-5"></div>
    @endif
    @endforeach
</div>
