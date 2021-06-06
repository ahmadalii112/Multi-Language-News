@extends('main.home_master')

@section('content')

  <!--Notice-->
@include('main.sections.notice')
    <!-- 1st-news-section-start -->
    @include('main.sections.FirstSection')



    <!-- 2nd-news-section-start -->
    @include('main.sections.SecondSection')


    <!-- 3rd-news-section-start -->
    @include('main.sections.ThirdSection')




    <!-- Photo Gallery -->
    @include('main.sections.PhotoGallery')









@endsection