<div class="container-xxl register-ct px-lg-5 mb-4 bg-transparent" id="register">
    <div class="row container register-sec-ct  mx-auto justify-content-between">
        <div class="col-lg-5 col-md-12">
            <h1 class="register-title mt-4">
                سجل الآن
            </h1>
            <h2 class="register-sub">
                أدخل معلوماتك وانضم الي صحبة للسياحة في رحلتك الى الحج والعمرة </h2>
            <p class="register-desc mt-3">املأ الاستمارة التالية لنتمكن من مساعدتك في تحقيق رحلتك الايمانية بكل
                سهولة ويسر.
                اختر ما يناسبك، وسنكون لك خير صحبة للحبيب.</p>
        </div>
        <div class="col-lg-5 col-md-8 col-md-12 position-relative">
            <div class="position-absolute pattern">
                <img src="{{ asset('assets/img/icons/pattern.png') }}" alt="">
            </div>

            {{-- resources\views\site\home\inc\register_form.blade.php --}}
            <form action="" class="d-flex align-items-center  position-relative" method="post">
                <div class="w-100">
                    <div class="radio-container mb-3">
                        <label class="radio-label">
                            رحلات حج
                            <input type="radio" name="trip" class="radio-input" checked>
                            <span class="custom-radio "></span>
                        </label>
                        <label class="radio-label">
                            رحلات عمرة
                            <input type="radio" name="trip" class="radio-input">
                            <span class="custom-radio checked"></span>
                        </label>
                    </div>
                    <div class="d-flex flex-column gap-3 phone-input-group">
                        <input type="text" class="input-form-name  w-100" name="" id="" placeholder="الاسم">
                        <input type="text" class="input-form phone-1 w-100" name="primaryPhone" id="mobile"
                            placeholder="رقم الهاتف">
                        <input type="text" class="input-form phone-1 w-100" name="secondaryPhone"
                            placeholder="رقم هاتف آخر" id="mobile2">

                        <input type="hidden" class="input-form phone-1" name="primaryPhoneWithCode">
                        <input type="hidden" name="secondaryPhoneWithCode" id="secondaryPhoneWithCode">
                        <select class="input-form custom-select" name="" id="mySelect">
                            <option class="option" value="">المدينة</option>
                            <option class="option" value="">المستوى</option>
                            <option class="option" value="">المستوى</option>
                            <option class="option" value="">المستوى</option>
                        </select>
                        <select class="input-form custom-select" name="" id="mySelect">
                            <option class="option" value="">المستوى</option>
                            <option class="option" value="">المستوى</option>
                            <option class="option" value="">المستوى</option>
                            <option class="option" value="">المستوى</option>
                        </select>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="register">سجل الآن</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
