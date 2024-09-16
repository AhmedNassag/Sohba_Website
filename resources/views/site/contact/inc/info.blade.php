<div class="container-xxl mx-auto  justify-content-center  my-5">
    <div class=" row  gap-0  single-opinion">
        <div class="d-flex gap-2 align-items-center py-2 ">
            <!-- <div class="yellow-line w-100" style="transform: scaleX(-1);"></div> -->

            <h2 class="vision  mb-2 py-0">
                تواصل معنا
            </h2>
        </div>
        @if ($settings)

            @foreach ($settings->address as $one)
                <div class="col-md-4 single-opinion px-3 mb-3">
                    <div class="d-flex flex-column  gap-2 align-items-center contact-card ps-3">
                        <div class="d-flex flex- align-items-center justify-content-start w-100 gap-2 ">
                            <!-- <img class=" " height="45" src="./assets/img/icons/branch.svg" alt=""> -->
                            <p class="branch-address mb-1"> {{ $one['locatioNname'] }} </p>
                        </div>
                        <div class="special-links w-100">

                            <div class="d-flex gap-2">
                                <div>
                                    <img src="./assets/img/icons/loc.png" alt="">
                                </div>
                                <p class="foot-desc fw-bold "> {{ $one['locationDetails'] }} </p>
                            </div>
                            <div class="d-flex gap-2">
                                <div>
                                    <img src="./assets/img/icons/phone.png" alt="">

                                </div>
                                <p class="foot-desc fw-bold ">
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
                                    <img src="./assets/img/icons/whats.png" alt="">

                                </div>
                                <p class="foot-desc fw-bold "> {{ $one['whatsapp'] }} </p>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        @endif



        <div class="col-md-4 single-opinion px-3 mb-3">
            <div class="d-flex flex-column justify-content-center gap-4 ter contact-card ps-3">

                <div class="align-items-start text-center justify-content-between  ">
                    <p class="branch-address mb-1">للتواصل
                    </p>

                    <div class="d-flex  gap-2 align-items-start text-center justify-content-between">
                        <a href="{{ @$settings->tik_tok_link }}"
                            class="d-flex card-desc flex-column align-items-center justify-content-between">
                            <img class="contact-icon " src="./assets/img/icons/tik-tok-big.svg" alt="">
                            <p class="card-desc fw-bold mb-0 text-center mt-2">تيك توك</p>
                        </a>
                        <a href="{{ @$settings->you_tube_link }}"
                            class="d-flex card-desc flex-column align-items-center justify-content-between">
                            <img class="contact-icon " src="./assets/img/icons/youtube.svg" alt="">
                            <p class="card-desc fw-bold mb-0 text-center mt-2">يوتيوب </p>

                        </a>
                        <a href="{{ @$settings->facebook_link }}"
                            class="d-flex card-desc flex-column align-items-center justify-content-between">
                            <img class="contact-icon " src="./assets/img/icons/facebook-big.svg" alt="">
                            <p class="card-desc fw-bold mb-0 text-center mt-2">فيس بوك</p>

                        </a>
                        <a href="{{ @$settings->instagram_link }}"
                            class="d-flex card-desc flex-column align-items-center justify-content-between">
                            <img class="contact-icon " src="./assets/img/icons/insta-big.svg">
                            <p class="card-desc fw-bold mb-0 text-center mt-2">انستجرام </p>

                        </a>
                        <a href="{{ @$settings->email_link }}"
                            class="d-flex card-desc flex-column align-items-center justify-content-between">
                            <img class="contact-icon " src="./assets/img/icons/mail.svg" alt="">
                            <p class="card-desc fw-bold mb-0 text-center mt-2">البريد الالكتروني </p>

                        </a>
                    </div>
                </div>
            </div>

        </div>
        <!--&--------------- single card End -->
        <!--&--------------- single card Start -->
    </div>
</div>
