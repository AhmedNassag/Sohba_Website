<div class="container d-flex justify-content-center mx-auto mt-5 mb-0 about-page-title" id="about-us">
    <div class="w-100 about-ct"><span></span>
        <h1 class="register-title mt-4 text-center">
            الخدمات السياحة </h1>
        <div class="row">


            @foreach ($services as $one)
                <!------ Clients start -->
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
                <!------ Clients End -->
            @endforeach

        </div>
    </div>
</div>
