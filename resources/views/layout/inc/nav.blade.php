<div class="nav container-fluid px-0 w-100 container-fluid">
    <nav class="navbar w-100 navbar-expand-lg bg-body-tertiary">
        <div class="container-xxl mx-auto row">
            <div class="d-flex justify-content-between col-md-2 ">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{ asset('assets/img/logos/logo.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>
            </div>
            <div class="collapse  row justify-content-center navbar-collapse col-md-10" id="navbarNav">
                <ul class="navbar-nav d-md-flex justify-content-center gap-4 col-md-10">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">
                            الرئيسية
                        </a>
                    </li>
                    <?php $categories = App\Models\Category::limit(2)->get(['slug','name']); ?>
                    @foreach($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('categories.index', $category->slug) }}">
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('services.index')}}">
                            الخدمات السياحة
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about.index')}}">
                            من نحن
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{route('home')}}#register">
                            سجل الآن
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contactUs.index')}}">
                            تواصل معنا
                        </a>
                    </li>
                </ul>
                <a href="tel:{{ @$settings->hotline }}" class="col-md-1">
                    <img class="nav-hot-line" src="{{ asset('assets/img/icons/hotiline.png') }}" alt="">
                </a>
            </div>
        </div>
    </nav>
</div>
