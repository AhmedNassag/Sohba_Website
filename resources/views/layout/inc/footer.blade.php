<footer class="footer container-fluid px-3 mt-5 pt-3 px-lg-0" id="contact-us">
    <div class="foot-inside container-xxl mx-auto">
        <div class="d-flex row px-lg-3 px-0 justify-content-between align-items-center mt-3 contact-footer">
            <div class="col-6 col-lg-3"> <img class=" logo" src="./assets/img/logos/logo.png" alt=""> </div>
            <a class="hot-line col-6 col-lg-3 d-flex align-items-center justify-content-lg-center" href="tel:{{ @$settings->hotline }}" class="">
                <img src="{{ @$settings->hotline_img }}" alt="">
            </a>
        </div>
        <div class="container-xxl my-3 divider"></div>
        <div class="row ">
            <div class="row py-3">
                <div class="col-lg-4 ">
                    <h3 class="contact-footer">
                        تواصـل معنـا!
                    </h3>
                    <h3 class="vision">
                        اتصل على أرقامنا للحجز والإستفسار
                    </h3>
                    <div class="d-lg-flex gap-2">
                        <a href="{{ @$settings->facebook_link }}" target="_blank">
                            <img src="./assets/img/icons/face.png" alt="">
                        </a>
                        <a href="{{ @$settings->instagram_link }}" target="_blank">
                            <img src="./assets/img/icons/insta.png" alt="">
                        </a>
                        <a href="{{ @$settings->tik_tok_link }}" target="_blank">
                            <img src="./assets/img/icons/tiktok.svg" alt="">
                        </a>
                        <a href="{{ @$settings->you_tube_link }}" target="_blank">
                            <img src="./assets/img/icons/youtube.svg" alt="">
                        </a>
                    </div>
                </div>

                @if ($settings)
                    @foreach ($settings->address as $one)
                        <div class="col-lg-4 d-flex flex-column">
                            <p class="branch-address">{{ $one['locatioNname'] }}</p>
                            <div class="d-flex gap-2">
                                <div>
                                    <img src="{{asset('assets/img/icons/loc.png') }}" alt="">
                                </div>
                                <p class="foot-desc"> {{ $one['locationDetails'] }} </p>
                            </div>
                            <div class="d-flex gap-2">
                                <div>
                                    <img src="{{asset('assets/img/icons/phone.png') }}" alt="">
                                </div>
                                <p class="foot-desc">
                                    @foreach ($one['hotline'] as $two)
                                        {{ $two['hotline'] }}
                                        @if (!$loop->last)
                                            -
                                        @endif
                                    @endforeach
                                </p>
                            </div>
                            <div class="d-flex gap-2">
                                <div>
                                    <img src="{{asset('assets/img/icons/whats.png') }}" alt="">
                                </div>
                                <p class="foot-desc"> {{ $one['whatsapp'] }}</p>
                            </div>

                        </div>
                    @endforeach
                @endif

            </div>
        </div>
        <div class="container-xxl my-3 divider"></div>
        <div class="copy-right">
            <p>Copyright © 2024 SOHBA Tours. All Right Reserved. Powered By <a href="https://www.mv-is.com/en" target="_blank">Master Vision Integerated Solutions</a> </p>
        </div>
    </div>
</footer>
