@extends('public.layouts.home')

@section('pageTitle', 'Home')

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/triangle.css') }}" />
@endsection

@section('body_class', 'home')

@section('after_body')
	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=466048633559601";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

@endsection

@section('content')

	<div id="Slideshow"></div>

	<div class="container">

		<div id="HomeBanner"></div>

		<div class="row featured_package">
			<div class="col s12 m12">
				<div id="FeaturedPackages"></div>
			</div>

			<div class="text-center">
				<p>&nbsp;</p>
				<p>
					<a href="{{ route('packages') }}" class="btn waves-effect waves-light">View all Packages</a>
				</p>
			</div>
		</div>	
	</div>

@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/triangle.js') }}"></script>
	<script src="{{ elixir('js/home-video.js') }}"></script>
	<script src="/js/Home.js"></script>
@endsection