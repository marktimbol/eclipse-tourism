@extends('public.layouts.public')
@section('pageTitle', $pageTitle)
@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/owl-carousel.css') }}" />
@endsection
@section('body_class', 'page')
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
	<div class="container">
		<div class="row">
			<div class="col m12 s12">
				<div class="package">
					<div class="row">
						<div id="PromoInformation"></div>
					</div>
					<div class="divider"></div>
					<div id="RelatedPackages" class="package__related"></div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('footer_scripts')
	<script src="{{ elixir('js/owl-carousel.js') }}"></script>
	<script src="{{ '/js/PromoInformation.js' }}"></script>
@endsection