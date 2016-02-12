@extends('admin.layouts.admin')
@section('pageTitle', 'Promo Details')
@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/dropzone.css') }}" />
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">{{ $promo->name }}</h1>
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
            		<h3>Upload Photos</h3>
            		<p>&nbsp;</p>
            		<div class="package-photos">
            			<div class="row">
            				@foreach( $promo->photos as $photo )
	            				<div class="col-md-2">
	            					<div class="package-photo">
	            						{!! getUploadedPhoto($photo->path, 'thumbnail img-responsive') !!}
	            						@if( count($promo->photos) > 1)
		            						<form method="POST" action="{{ route('admin.deals.photos.delete', $photo->path) }}">
		            							{!! csrf_field() !!}
		            							{!! method_field('DELETE') !!}
		     									<button type="submit" name="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
		            						</form>
	            						@endif
	            					</div>
	            				</div>
            				@endforeach
            			</div>
            		</div>

		            <form class="dropzone" id="UploadPhotosForm" action="{{ route('admin.deals.photos.upload', $promo->id) }}">
		            	{!! csrf_field() !!}
		            	<input type="hidden" name="package_id" value="{{ $promo->id }}" />
		            </form>
				</div>
			</div>
        </div>
    </div>
@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/dropzone.js') }}"></script>
@endsection