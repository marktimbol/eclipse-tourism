@extends('admin.layouts.admin')

@section('pageTitle', 'Promo Details')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">{{ $promo->package->name }}</h1>

            <div class="row">
            	<div class="col-md-6">
					<div class="description">
						<h3>Promo Details</h3>
						{!! $promo->description !!}		       	
					</div>

					<hr />

					<form method="POST" action="{{ route('admin.deals.destroy', $promo->id) }}">
						{!! csrf_field() !!}
						{!! method_field('DELETE') !!}

						<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete this promo</button>
					</form>
				</div>

				<div class="col-md-6">
					<h3>Promo Information</h3>

					<ul class="list-group">
						<li class="list-group-item">
							<strong>Adult Price:</strong> <span class="oldPrice">{{ $promo->package->adult_price }}</span> {{ $promo->adultPrice }} AED
						</li>
						<li class="list-group-item">
							<strong>Child Price:</strong> <span class="oldPrice">{{ $promo->package->child_price }}</span> {{ $promo->childPrice }} AED
						</li>
					</ul>
				</div>
			</div>
        </div>
    </div>
@endsection