<section class="container mx-auto mb-3 d-flex flex-column mb-5 wow fadeInUp">
    <h2 class="vision  mb-2 py-0">
        احجز الان </h2>
        <form action="service-reservation" class="package-form row w-100" method="POST">
            @csrf
            <div class="col-md-4 my-md-3 my-2">
                <input class="input-contact w-100 ps-3" type="text" name="name" placeholder="الاسم" value="{{ old('name') }}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4 my-md-3 my-2">
                <input type="tel" class="input-form phone-1 input-contact w-100 text-start" name="mobile" id="mobile" value="{{ old('mobile') }}" placeholder="رقم الهاتف">
                @error('mobile')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4 my-md-3 my-2">
                <select class="input-form custom-select input-contact" name="service_id" id="mySelect">
                    <option class="option" value="">
                        اختر خدمة
                    </option>
                    @foreach ($services as $one)
                        <option class="option" value="{{ $one->id }}" {{ old('service_id') == $one->id ? 'selected' : '' }}>
                            {{ $one->name }}
                        </option>
                    @endforeach
                </select>
                @error('service_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="col-md-2 my-md-3 my-2">
                <button class="send d-flex justify-content-center gap-3 align-items-center"> احجز <i class="bi bi-send"></i></button>
            </div>
        </form>

</section>
