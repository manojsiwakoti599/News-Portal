@extends('main.body.master_home')

@section('content')



    <!-- 1nd-news-section-start -->
@include('home-section.first-section')
><!-- /.1nd-news-section-close -->

    <!-- 2nd-news-section-start -->
    @include('home-section.second-section')
><!-- /.2nd-news-section-close -->

    <!-- 3rd-news-section-start -->

    @include('home-section.third-section')
    <!-- /.3rd-news-section-close -->

    <!-- gallery-section-start -->
    @include('home-section.gallery')
    <!-- /.gallery-section-close -->



@endsection
