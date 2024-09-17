@extends('layout.master')


@section('content')

 <!--&--------------- Carousel Start -->
 @include('site.category_details.inc.landing')
 <!--&--------------- Carousel End -->


 <div class="main-divider  container mx-auto mb-md-0"></div>

  <!--?----------about Start -->
  @include('site.category_details.inc.overview')
  <!--?----------about End -->


  <div class="main-divider  container mx-auto my-5"></div>

 <!--^--------------- Form start -->
 @include('site.category_details.inc.contact')
 <!--^--------------- Form End -->


@endsection
