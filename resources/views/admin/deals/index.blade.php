@extends('admin.layouts.admin')

@section('pageTitle', 'Deals')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <h1 class="page-header">Deals</h1>

            <table class="table table-hover">
            	<thead>
            		<tr>
            			<th>Package</th>
            			<th>Adult Price</th>
            			<th>Child Price</th>
            			<th>&nbsp;</th>
            		</tr>	
            	</thead>

            	<tbody>
            		@forelse( $promos as $promo )
            		<tr>
            			<td>{{ $promo->package->name }}</td>
            			<td>{{ $promo->adultPrice }}</td>
            			<td>{{ $promo->childPrice }}</td>
            			<td>
            				<a href="{{ route('admin.deals.show', $promo->id) }}"><i class="fa fa-eye"></i> View</a>&nbsp;&nbsp;
                            <a href="{{ route('admin.deals.edit', $promo->id) }}"><i class="fa fa-pencil"></i> Edit</a>
                        </td>
            		</tr>
            		@empty
                        <td>No record yet. Please <a href="{{ route('admin.deals.create') }}">Add New Promo</a></td>
            		@endforelse
            	</tbody>
            </table>
        </div>
    </div>
@endsection