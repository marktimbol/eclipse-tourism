@extends('admin.layouts.admin')

@section('pageTitle', 'New Promo')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">New Promo</h1>

            <div class="row">
            	<div class="col-md-12">
            		
            		@include('errors.forms')

		            <form method="POST" action="{{ route('admin.deals.store') }}">
		            	{!! csrf_field() !!}
	            
		            	<div class="row">
    	            		<div class="col-md-4">
    			            	<div class="form-group">
    			            		<label for="package_id">Package Name</label>
    			            		<select name="package_id" id="package_id" class="form-control">
    			            			<option value=""></option>
    			            			@foreach( $packages as $package )
    			            				<option value="{{ $package->id }}">
    			            					{{ $package->name }}
    			            				</option>
    			            			@endforeach
    			            		</select>
    			            	</div>
    	            		</div> 

            				<div class="col-md-4">
				            	<div class="form-group">
				            		<label for="adultPrice">Adult Price</label>
				            		<div class="input-group">
				            			<input type="text" name="adultPrice" id="adultPrice" class="form-control" placeholder="Adult Price" />
				            			<div class="input-group-addon">AED</div>
				            		</div>
				            	</div>
            				</div>

            				<div class="col-md-4">
				            	<div class="form-group">
				            		<label for="childPrice">Child Price</label>
				            		<div class="input-group">
				            			<input type="text" name="childPrice" id="childPrice" class="form-control" placeholder="Child Price" />
				            			<div class="input-group-addon">AED</div>
				            		</div>
				            	</div>
            				</div>

            				<div class="col-md-12">
				            	<div class="form-group">
				            		<label for="description">Description</label>
				            		<textarea name="description" id="description" class="form-control ckeditor" placeholder="Promo Description" rows="10">

				            		</textarea>
				            	</div>

				            	<hr />

				            	<div class="form-group">
				            		<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save Information</button>
				            	</div>
            				</div>
		            	</div>
		            </form>
            	</div>
            </div>
        </div>
    </div>
@endsection

@section('footer_scripts')
	<script src="https://cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
@endsection