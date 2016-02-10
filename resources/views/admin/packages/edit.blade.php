@extends('admin.layouts.admin')
@section('pageTitle', 'Edit Package')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Edit Package</h1>
            <div class="row">
            	<div class="col-md-12">
            		@include('errors.forms')
		            <form method="POST" action="{{ route('admin.packages.update', $package->id) }}">
		            	{!! method_field('PUT') !!}
		            	{!! csrf_field() !!}
		            	<div class="row">
		            		<div class="col-md-4">
				            	<div class="form-group">
				            		<label for="name">Name</label>
				            		<input type="text" name="name" id="name" 
				            			class="form-control" 
				            			value="{{ $package->name }}" 
				            			placeholder="Package Name" />
				            	</div>
		            		</div>

		            		<div class="col-md-4">
				            	<div class="form-group">
				            		<label for="subtitle">Subtitle</label>
				            		<input type="text" name="subtitle" 
				            			id="subtitle" 
				            			class="form-control" 
				            			value="{{ $package->subtitle }}" 
				            			placeholder="Action Packed Off Road Exploring" />
				            	</div>
		            		</div>

		            		<div class="col-md-4">
				            	<div class="form-group">
				            		<label for="category">Category</label>
				            		<select name="category_id" id="category" class="form-control">
				            			<option value=""></option>
				            			@foreach( $categories as $category )
				            				<option value="{{ $category->id }}"
				            					{{ ($category->id == $package->category->id) ? ' selected' : '' }}
				            				>
				            					{{ $category->name }}
				            				</option>
				            			@endforeach
				            		</select>
				            	</div>
		            		</div>            		
		            	</div>		            	

		            	<div class="row">
		            		<div class="col-md-8">
		            			<div class="row">
		            				<div class="col-md-3">
						            	<div class="form-group">
						            		<label for="adult_price">Adult Price</label>
						            		<div class="input-group">
						            			<input type="text" name="adult_price" 
						            				id="adult_price" 
						            				class="form-control" 
						            				value="{{ $package->adult_price }}" 
						            				placeholder="Adult Price" />
						            			<div class="input-group-addon">AED</div>
						            		</div>
						            	</div>
		            				</div>

		            				<div class="col-md-3">
						            	<div class="form-group">
						            		<label for="child_price">Child Price</label>
						            		<div class="input-group">
						            			<input type="text" name="child_price" 
						            				id="child_price" 
						            				class="form-control" 
						            				value="{{ $package->child_price }}" 
						            				placeholder="Child Price" />
						            			<div class="input-group-addon">AED</div>
						            		</div>
						            	</div>
		            				</div>

            						<div class="col-md-3">
						            	<div class="form-group">
						            		<label for="minimum_quantity">Minimum Qty.</label>
						            		<input type="text" name="minimum_quantity" 
						            			id="minimum_quantity" 
						            			class="form-control" 
						            			value="{{ $package->minimum_quantity }}" 
						            			placeholder="Minimum Adult Qty." />
						            	</div>
            						</div>

            						<div class="col-md-3">
            							<br />
            							<div class="checkbox">
						            		<label>
						            			<input type="checkbox" 
						            				value="1" 
						            				name="has_ticket_option" {{ $package->has_ticket_option == 1 ? 'checked' : ''}} />
						            				Has Ticket Options?
						            		</label>
            							</div>
									</div>
		            			</div>
		            		</div>
		            	</div>

		            	<div class="form-group">
		            		<label for="description">Description</label>
		            		<textarea name="description" 
		            			id="description" 
		            			class="form-control ckeditor" 
		            			placeholder="Package Description" rows="10">
		            			{{ $package->description }}
		            		</textarea>
		            	</div>

		            	<div class="checkbox">
		            		<label>
		            			<input type="checkbox" 
		            				name="has_time_options" 
		            				value="1" {{ $package->has_time_options == 1 ? 'checked' : '' }} />
		            				Allow customer to select their timings during booking.
		            		</label>
		            	</div>			            	

		            	<div class="checkbox">
		            		<label>
		            			<input type="hidden" name="confirm_availability" value="0" />
		            			<input type="checkbox" 
		            				name="confirm_availability" 
		            				value="1" {{ $package->confirm_availability ? 'checked' : '' }} />
		            				This package is subject for availability.
		            		</label>
		            	</div>			  

		            	<hr />

		            	<div class="form-group">
		            		<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Information</button>
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