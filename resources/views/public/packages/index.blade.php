@extends('public.layouts.public')

@section('pageTitle', 'Packages')

@section('body_class', 'page has-parallax')

@section('content')

    <div class="parallax-container">
        <div class="parallax">
            <div class="container">
                <div class="row">
                    <div class="col s12 m12">
                        <div class="white-transparent">
                            <h1 class="parallax__title">Packages</h1>
                        </div>
                    </div>
                </div>
            </div>
            {!! getParallaxPhoto('packages.jpg', 'Packages') !!}
        </div>
    </div>

	<div class="row">
		<div class="col s12">
			<div class="page__description">
				<div class="row">
					<div class="col s12 m3">
						<div class="card-panel">
							<div class="filter-package" id="CategoriesFilter"></div>
						</div>
					</div>

					<div class="col s12 m9">
						<div class="card-panel">
							<div class="row">
								<div id="Packages"></div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

@endsection

@section('footer_scripts')
	<script src='/js/PackagesPage.js'></script>
@endsection	
