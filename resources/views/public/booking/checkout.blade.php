@extends('public.layouts.public')

@section('pageTitle', 'Complete Your Booking')

@section('body_class', 'page')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col m12">
				<h1 class="page__title">Complete Your Booking</h1>
				<div class="page__description">
					<div id="BookingCheckout"></div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('footer_scripts')
	<script src="/js/BookingCheckout.js"></script>
@endsection
