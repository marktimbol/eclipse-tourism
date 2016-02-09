@extends('admin.layouts.admin')
@section('pageTitle', 'Edit Promo')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Edit Promo</h1>
            <div class="row">
            	<div class="col-md-12">
            		
            		@include('errors.forms')

		            <form method="POST" action="{{ route('admin.deals.update', $promo->id) }}">

		            	{!! method_field('PUT') !!}
		            	{!! csrf_field() !!}
	            
		            	<div class="row">
            				<div class="col-md-12">
				            	<div class="form-group">
				            		<label for="name">Name</label>
				            		<input type="text" name="name" id="name" value="{{ $promo->name }}" class="form-control" placeholder="Promo name" />
				            	</div>
				            	<div class="form-group">
				            		<label for="description">Description</label>
				            		<textarea name="description" id="description" class="form-control ckeditor" placeholder="Promo Description" rows="10">
				            			{{ $promo->description }}
				            		</textarea>
				            	</div>

				            	<hr />

				            	<div class="form-group">
				            		<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Information</button>
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