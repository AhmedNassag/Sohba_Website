<section class="container-xxl mx-auto mb-3 d-flex flex-column align-items-center mb-5 wow fadeInUp h-100">
    <h2 class="vision mb-3 text-start w-100">
        احجز الان       </h2>
    <form action="{{route('categoryDetails.book')}}" class="package-form h-100 row w-100" method="POST">
        @csrf
        <div class="col-md-5 my-md-3 my-2">
            <input class="input-contact w-100 ps-3" type="text" name="name" id="" placeholder="الاسم">

        </div>
        <div class="col-md-5 my-md-3 my-2">
            <input type="text" class="input-form phone-1 input-contact  w-100" name="Phone" id="mobile"
                placeholder="رقم الهاتف">

        </div>
        <input type="hidden" name="program_id" value="{{$program->id}}">

        <div class="col-md-2 my-md-3 my-2">
            <button class="send d-flex justify-content-center gap-3 align-items-center" type="submit"> احجز <i
                    class="bi bi-send"></i></button>
        </div>
    </form>
</section>
