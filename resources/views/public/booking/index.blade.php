@extends('public.layouts.public')

@section('pageTitle', 'Your Bookings')

@section('body_class', 'page')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col m12">
				<h1 class="page__title">Bookings</h1>
				<div class="page__description">
					<div id="BookingTable"></div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('footer_scripts')
	<script src="/js/BookingTable.js"></script>
@endsection