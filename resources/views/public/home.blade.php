@extends('public.layouts.home')

@section('pageTitle', 'Home')

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/triangle.css') }}" />
@endsection

@section('body_class', 'home')

@section('content')

	<div id="Slideshow"></div>

	<div class="container">

		<div id="HomeBanner"></div>

		<div id="FeaturedPackages"></div>
		
	</div>

@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/triangle.js') }}"></script>
	<script src="{{ elixir('js/home-video.js') }}"></script>
	<script src="/js/Home.js"></script>
@endsection