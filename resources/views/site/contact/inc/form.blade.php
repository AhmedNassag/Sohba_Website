<section
class="container-xxl mx-auto mb-3 d-flex flex-column align-items-center mb-5 wow fadeInUp about-page-title">
<h1 class="register-title mt-4 text-center w-100">
    تواصـل معنا </h1>
<form action="{{route('contactus.store')}}" class="package-form position-relative  row w-100 h-100" method="POST">
    @csrf
    <div class="col-md-6 position-relative z-2">
        <div class="w-100 my-md-3 my-2">
            <input class="input-contact w-100 ps-3" type="text" name="name" id="" placeholder="الاسم">

        </div>
        <div class="w-100 my-md-3 my-2">
            <input class="input-contact w-100 ps-3 text-start" type="email" name="email" id=""
                placeholder="البريد الالكتروني ">

        </div>
        <div class="w-100 my-md-3 my-2">
            <input type="text" class="input-form phone-1 input-contact  w-100" name="phone" id="mobile"
                placeholder="رقم الهاتف">

        </div>

    </div>
    <div class="col-md-6 position-relative z-2">
        <div class="w-100 my-md-3 my-2">
            <textarea class="input-contact w-100 ps-3" name="message" placeholder="أترك رسالتك"></textarea>

        </div>

    </div>
    <div class="col-md-2 my-md-3 my-2 position-relative z-2">
        <button class="send d-flex justify-content-center gap-3 align-items-center" type="submit"> ارسل <i
                class="bi bi-send"></i></button>
    </div>
    <div class="position-absolute   d-flex justify-content-end p-0 align-items-end h-100 z-0"
        style="bottom: -100px;">
        <img src="./assets/img/icons/pattern.png" alt="">
    </div>
</form>
</section>
