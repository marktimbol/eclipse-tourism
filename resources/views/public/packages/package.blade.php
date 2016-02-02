@extends('public.layouts.public')

@section('pageTitle', $pageTitle)

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/owl-carousel.css') }}" />
@endsection

@section('body_class', 'page')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col m12 s12">
				<div class="package">
					<div class="row">
						<div id="PackageInformation"></div>
					</div>

					<div class="divider"></div>

					<div class="row">
						<div class="col m12 s12">
							<div class="package__related" id="RelatedPackages"></div>
						</div>				
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/owl-carousel.js') }}"></script>
	<script src="{{ '/js/PackagePage.js' }}"></script>
@endsection