@php
$seo = DB::table('seos')->first();
@endphp


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="{{ $seo->meta_author}}">
        <meta name="keyword" content="{{ $seo->meta_keyword}}">
        <meta name="google-analytics" content="{{ $seo->google_analytics}}">
        <meta name="alexa-analytics" content="{{ $seo->alexa_analytics}}">
        <meta name="google-verification" content="{{ $seo->google_verification}}">
        <meta name="keyword" content="{{ $seo->meta_description}}">
        <title>{{ $seo->meta_title}}</title>

        <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/menu.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/font-awesome.min.css') }}" rel="stylesheet">
        {{-- <link href="{{ asset('frontend/assets/css/font-awesome.css') }}" rel="stylesheet"> --}}
        <link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/style.css') }}" rel="stylesheet">

    </head>
    <body>
    <!-- header-start -->
    @include('main.body.header')


	<!-- 1st-news-section-start -->
    @yield('content')



	<!-- top-footer-start -->
	@include('main.body.footer')


		<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
	</body>
</html>
