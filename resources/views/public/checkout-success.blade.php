@extends('public.layouts.public')

@section('pageTitle', 'Thank you')

@section('body_class', 'page')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col m12">
				<h1 class="page__title">Thank you</h1>
				<div class="page__description">	
					<p class="text-center">Thank you for booking packages with us. You will receive an electronic payment receipt shortly.<br />
					One of our customer representative will contact you shortly.
					</p>

					<p>&nbsp;</p>
					<p class="text-center">{{ config('eclipse.name') }}</p>
				</div>
			</div>
		</div>
	</div>
@endsection