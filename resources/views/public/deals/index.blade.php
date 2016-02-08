@extends('public.layouts.public')

@section('pageTitle', 'Deals')

@section('body_class', 'page has-parallax')

@section('content')

    <div class="parallax-container">
        <div class="parallax">
            <div class="container">
                <div class="row">
                    <div class="col s12 m12">
                        <div class="white-transparent">
                            <h1 class="parallax__title">Deals</h1>
                        </div>
                    </div>
                </div>
            </div>
            {!! getParallaxPhoto('dubai.jpg', 'Dubai') !!}
        </div>
    </div>

	<div class="container">
		<div class="row">
			<div class="col m12">
				<div class="page__description">
                    <div class="card-panel">
                        <div class="row">
                            @foreach( $promos as $promo )
                                <div class="col s12 m4">
                                    <div class="card">
                                        <div class="card-image">
                                            {!! display($promo->package->photos) !!}
                                        </div>

                                        <div class="card-action">
                                            <a href="{{ route('promo.package', [$promo->id, $promo->package->slug]) }}">
                                                {{ $promo->package->name }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>  

@endsection