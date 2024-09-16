@extends('layout.master')


@section('content')
    <!--~--------------- Discover omrah start -->
    <section class="container-xxl wow fadeInUp mx-auto pt-lg-4 mb-">
        <div class="discover-title-ct">
            <h2 class="register-title text-center ">
                اكتشف برامج {{$category->name}}
            </h2>
            <p class=" mb-lg-5 desc-span text-center">
                استمتع بتجربة روحانية لا تُنسى مع رحلات سياحية المصممة بعناية لضمان راحتك وأمانك في كل خطوة.
            </p>
        </div>
        <!-- cards Start -->
        <div class="row container-xxl mx-auto cards-container px-0">
            <div class="row px-0">
                @foreach ($progrmes as $program )
                    <div class="col-lg-3 col-md-4">
                        <div class="wow zoomIn tab-pane fade show active d-block" id="pills-tourism-tab" role="tabpanel"
                            aria-labelledby="pills-profile-tab" data-wow-delay="0.1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                            <div class="tour_container" style="height: fit-content">
                                <div class="img_container">
                                    <a href="{{route('categoryDetails.index', $program->slug)}}">
                                        @foreach($program->getMedia('program_main_image') as $media)
                                            <img src="{{ $media->getUrl() }}" alt="Program Image">
                                        @endforeach

                                    </a>
                                </div>
                                <div class="tour_title">
                                    <div class="ct-tit-ct mb-2">
                                        <h3 class="cat-in-card px-3 py-">{{$category->name}}</h3>
                                    </div>
                                    <h2 class="card-title">
                                        {{$program->name}}
                                    </h2>
                                    <p class="card-desc">{{$program->short_description}}
                                    </p>
                                    <div class="row">

                                        <div class=" d-flex align-items-center gap-2 justify-content-end w-100">

                                            <p class="mb-0 startFrom">يبدأ من</p>
                                            <h2 class="prices fw-bolder">{{$program->price}}<span class="unit fw-lighter">ج.م</span>
                                            </h2>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- End box tour -->
                        </div>
                        <!-- End col -->
                    </div>
                @endforeach
            </div>
        </div>
        <!-- cards End -->
        <!-- <div class="d-flex justify-content-center mb-3">
                <a href="#" class="show-more px-lg-3 px-2 ">
                    <p class="mb-0"> اكتشف المزيد
                    </p>
                    <img class="mt-" src="./assets/img/icons/left.svg" alt="">
                </a>
            </div> -->

        <div class="main-divider  container mx-auto "></div>
    </section>
    <!--~--------------- Discover End -->
@endsection
