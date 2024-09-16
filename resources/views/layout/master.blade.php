@include('layout.inc.head')

<body>

    <!-- Spinner Start -->

    <!-- Spinner End -->
    <!--!--------------- Navbar Start -->
    @include('layout.inc.nav')
    <!--!--------------- Navbar End -->


   @yield('content')


    <!--//-------------- Footer Start -->

    @include('layout.inc.footer')
    <!--//-------------- Footer End -->

@include('layout.inc.scripts')
