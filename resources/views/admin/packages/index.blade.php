@extends('admin.layouts.admin')

@section('pageTitle', 'All Packages')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <h1 class="page-header">All Packages ({{ count($packages) }})</h1>

            <table class="table table-hover">
            	<thead>
            		<tr>
                        <th>Name</th>
                        <th>Category</th>
            			<th>Adult Price</th>
            			<th>Child Price</th>
            			<th>&nbsp;</th>
            		</tr>	
            	</thead>

            	<tbody>
            		@forelse( $packages as $package )
            		<tr>
                        <td>
                            <a href="{{ route('admin.packages.show', $package->id) }}">
                                {{ str_limit($package->name, 30) }}
                            </a>
                        </td>                    
                        <td>
                            <a href="{{ route('admin.categories.edit', $package->category_id) }}">
                                {{ $package->category->name }}
                            </a>
                        </td>
            			<td>{{ $package->adult_price }} AED</td>
            			<td>{{ $package->child_price }} AED</td>
            			<td>
                            <a href="{{ route('admin.packages.show', $package->id) }}"><i class="fa fa-eye"></i> View</a>&nbsp;&nbsp;
                            <a href="{{ route('admin.packages.edit', $package->id) }}"><i class="fa fa-pencil"></i> Edit</a>
                        </td>
            		</tr>
            		@empty
                        <td>No record yet. Please <a href="{{ route('admin.packages.create') }}">add a new one</a></td>
            		@endforelse
            	</tbody>
            </table>
        </div>
    </div>
@endsection