<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('pageTitle') | {{ companyName() }}</title>
	<meta name="token" content="{{ csrf_token() }}" />
	<meta name="publishable-key" content="{{ env('STRIPE_KEY') }}" />
	<meta name="twocheckout-account-number" content="{{ env('TWOCHECKOUT_ACCOUNT_NUMBER') }}" />
	<meta name="twocheckout-public-key" content="{{ env('TWOCHECKOUT_PUBLIC_KEY') }}" />
	<meta name="site_url" content="{{ env('SITE_URL') }}" />
	<meta name="current_currency" content="{{ currentCurrency() }}" />
	@if( isset($package) )
	<!-- for Facebook -->          
	<meta property="og:title" content="{{ $package->name }}" />
	<meta property="og:type" content="article" />
	<meta property="og:image" content="/images/uploads/{{ $package->photos->first()->path }}" />
	<meta property="og:url" content="/package/{{$package->slug}}" />
	<meta property="og:description" content="{{ str_limit($package->description, 150) }}" />
	<meta name="description" content="{{ str_limit($package->description, 150) }}" />
	@else
	<meta name="description" content="A Memorable Experience" />	
	@endif
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{ elixir('css/public.css') }}" />

	@yield('header_styles')
	
</head>

	<body class="@yield('body_class')" id="eclipseApp">

		@yield('after_body')

		<div class="fixed-action-btn mobile-menu">
			<button id="trigger-overlay" type="button" class="btn-floating btn-medium transparent">
				<i class="fa fa-bars"></i>
			</a>
		</div>	

		<header>
			<div class="row no-margin-bottom">
				<div id="MainMenu"></div>
			</div>

			@if( $showLogo )

				<div id="topLeftCorner" 
					style="background-image: url({{ asset('images/top-left-corner.png') }});"
				>
				</div>		

				<div class="logo">
					<a href="{{ route('home') }}">
						{!! getPhoto('logo.png', companyName(), '') !!}
					</a>
				</div>
			@endif	

		</header>

