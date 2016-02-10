<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('pageTitle') | {{ config('eclipse.name') }}</title>
	<meta name="token" content="{{ csrf_token() }}" />
	<meta name="publishable-key" content="{{ config('services.stripe.key') }}" />
	<meta name="twocheckout-account-number" content="{{ config('services.twocheckout.accountNumber') }}" />
	<meta name="twocheckout-public-key" content="{{ config('services.twocheckout.key') }}" />
	<meta name="site_url" content="{{ config('eclipse.url') }}" />
	<meta name="current_currency" content="{{ currentCurrency() }}" />

	@if( isset($package) )
		<meta property="og:title" content="{{ $package->name }}" />
		<meta property="og:type" content="article" />
		<meta property="og:image" content="{{ config('eclipse.url') }}images/uploads/{{ $package->photos->first()->path }}" />
		<meta property="og:url" content="{{ config('eclipse.url') }}package/{{$package->slug}}" />
		<meta property="og:description" content="{{ str_limit(strip_tags($package->description), 300) }}" />

		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="">
		<meta name="twitter:title" content="{{ $package->name }}">
		<meta name="twitter:description" content="{{ str_limit(strip_tags($package->description), 200) }}">
		<meta name="twitter:creator" content="">
		<meta name="twitter:image:src" content="{{ config('eclipse.url') }}images/uploads/{{ $package->photos->first()->path }}">
		<meta name="twitter:domain" content="{{ config('eclipse.url') }}">
		
		<meta name="description" content="{{ str_limit(strip_tags($package->description), 300) }}" />
	@else
		<meta name="description" content="A Memorable Experience" />	
	@endif

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
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
				<div id="topLeftCorner" style="background-image: url({{ asset('images/top-left-corner.png') }});"></div>		

				<div class="logo">
					<a href="{{ route('home') }}">
						{!! getPhoto('logo.png', config('eclipse.name'), '') !!}
					</a>
				</div>
			@endif	
		</header>

