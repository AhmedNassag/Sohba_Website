<div class="container-xxl mt-5 about-page-title" id="about-us">
    <div class="container-xxl "><span></span>
        <h1 class="register-title mt-4">
            من نحن
        </h1>
        <p class="about-desc">{!! $aboutUs->main_description !!}</p>
        @if ($details->isNotEmpty())
            <div class="row justify-content-between mt-5 pt-3">
                <div class="col-lg-5">
                    @foreach ($details as $detail)

                        <div class="">
                            <div class="d-flex gap-2 align-items-center pt-3">
                                <div style="height: fit-content;">
                                    <img src="{{$detail->getFirstMediaUrl('images') }}" class="about-icon" alt="">
                                </div>
                                <h3 class="vision">
                                    {{ $detail->title }}
                                </h3>
                            </div>
                            <p class="about-desc">
                                {!!  $detail->content !!}
                            </p>
                        </div>

                    @endforeach
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    <img class="about-us" src="{{$aboutUs->getFirstMediaUrl('about_us_image')}}" alt="">
                </div>
            </div>

        @endif
    </div>
</div>
