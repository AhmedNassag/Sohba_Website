@extends('layout.master')


@section('content')

 <!--&--------------- Carousel Start -->
 @include('site.home.inc.landing')
 <!--&--------------- Carousel End -->

 <!--^--------------- Form start -->
 @include('site.home.inc.register_form')
 <!--^--------------- Form End -->



 <!--?----------about Start -->
 @include('site.home.inc.about_us')
 <!--?----------about End -->


@endsection
