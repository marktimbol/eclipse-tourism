@extends('admin.layouts.admin')

@section('pageTitle', 'All Packages')

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/dropzone.css') }}" />
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">{{ $package->name }}</h1>

            <div class="row">
            	<div class="col-md-6">

					<div class="description">
						<h3>{{ $package->subtitle }}</h3>
						{!! $package->description !!}

						<p>&nbsp;</p>
						<p>&nbsp;</p>

	            		<h3>Upload Photos</h3>
	            		<p>&nbsp;</p>
	            		<div class="package-photos">
	            			<div class="row">
	            				@forelse( $package->photos as $photo )
		            				<div class="col-md-2">
		            					<div class="package-photo">
		            						{!! getUploadedPhoto($photo->path, 'thumbnail img-responsive') !!}
		            						<form method="POST" action="{{ route('admin.packages.photos.delete', $photo->path) }}">
		            							{!! csrf_field() !!}
		            							{!! method_field('DELETE') !!}
		            							
		            							<button type="submit" name="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
		            							
		            						</form>
		            					</div>
		            				</div>
	            				@empty

	            				@endforelse
	            			</div>
	            		</div>

			            <form class="dropzone" id="UploadPhotosForm" action="{{ route('admin.packages.photos.upload') }}">
			            	{!! csrf_field() !!}
			            	{!! method_field('PUT') !!}
			            	<input type="hidden" name="package_id" value="{{ $package->id }}" />
			            </form>
		            	
					</div>
				</div>

				<div class="col-md-6">
					<h3>Package Information</h3>
					<ul class="list-group">
						<li class="list-group-item">
							<strong>Adult Price:</strong> {{ $package->adult_price }} AED
						</li>
						<li class="list-group-item">
							<strong>Child Price:</strong> {{ $package->child_price }} AED
						</li>
						<li class="list-group-item">
							<strong>Customer can select their timings:</strong> {{ $package->has_time_options ? 'Yes' : 'No' }}
						</li>							
						<li class="list-group-item">
							<strong>Subject for Availability:</strong> {{ $package->confirm_availability ? 'Yes' : 'No' }}
						</li>						
					</ul>

					<div id="PackageInformation"></div>
					
					<hr />

					<div id="TicketOptions"></div>
				</div>
			</div>
        </div>
    </div>
@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/dropzone.js') }}"></script>
	<script src="/js/admin/PackageInformation.js"></script>
@endsection