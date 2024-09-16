<div class="container-xxl mt-5 about-page-title" id="about-us">
    <div class="container-xxl "><span></span>
        <h1 class="register-title mt-4">
            من نحن
        </h1>
        <p class="about-desc">{{$aboutUs->main_description}}</p>
        {{-- <p class="about-desc">
            نحن في شركة صحبة للسياحة نؤمن بأن السفر هو تجربة غنية للإستمتاع والتبادل الثقافى والروحى لذا فإننا نطبق
            اعلى معاير جوده الخدمة لعملائنا من خلال التعاون المثمر مع ارقى مقدمى الخدمات السياحية في مختلف المجالات
            السياحية <span class="desc-span">(السياحة الداخلية والخارجية – خدمات النقل الجوى والبري – الحج
                والعمرة)</span>
        </p> --}}
        <p class="about-desc">
            <b> رقم الترخيص :</b>
            <span class=" fw-bold"> 12154155</span>
        </p>
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
                                    {{$detail->title}}
                                </h3>
                            </div>
                            <p class="about-desc">
                                {{$detail->content}}
                            </p>
                        </div>

                    @endforeach
                    {{-- <div class="">
                        <div class="d-flex gap-2 align-items-center pt-3">
                            <div style="height: fit-content;">
                                <img src="./assets/img/icons/target.png" class="about-icon" alt="">
                            </div>
                            <h3 class="vision">
                                هدفنا
                            </h3>
                        </div>
                        <p class="about-desc">
                            تجاوز توقعات عملائنا الذين يسعون لتحقيق تجربة سياحية متميزة ومختلفة داخل الوطن او خارجه
                            لتصبح صحبة للسياحة مثالاً رائداً في صناعة السياحة .
                        </p>
                    </div>
                    <div class="">
                        <div class="d-flex gap-2 align-items-center pt-2">
                            <div style="height: fit-content;">
                                <img src="./assets/img/icons/message.png" class="about-icon" alt="">
                            </div>
                            <h3 class="vision">
                                رسالتنا
                            </h3>
                        </div>
                        <p class="about-desc">
                            نسعى في شركة صحبة للسياحة دائما وبكل قوة الى الاحتفاظ بريادة مصر في هذا المجال و نحرص على
                            المشاركة المجتمعية كما نرتقى بأداء منسوبينا ونهتم بأسرهم وتوفير التطور المهنى والمستدام لهم.
                        </p>
                    </div> --}}

                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    <img class="about-us" src="{{$aboutUs->getFirstMediaUrl('about_us_image')}}" alt="">
                </div>
            </div>

        @endif
    </div>
</div>