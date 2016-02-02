@extends('public.layouts.public')

@section('pageTitle', 'Shopping Cart')

@section('body_class', 'page')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col m12">
				<h1 class="page__title">Shopping Cart</h1>
				<div class="page__description">
					<div id="CartTable"></div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('footer_scripts')
	<script src="/js/CartTable.js"></script>
@endsection