@extends('admin.layouts.admin')

@section('pageTitle', 'Bookings')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <h1 class="page-header">Upon Requests</h1>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Booking #</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Location</th>
                        <th>&nbsp;</th>
                    </tr>   
                </thead>

                <tbody>

                    @forelse( $bookings as $booking )
                        <tr>
                            <td>{{ $booking->booking_reference }}</td>
                            <td>{{ $booking->user->name }}</td>
                            <td>{{ $booking->user->email }}</td>
                            <td>{{ $booking->user->phone }}</td>
                            <td>{{ sprintf('%s, %s, %s', $booking->user->city, $booking->user->state, $booking->user->country) }}</td>
                            <td>
                                <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#bookingInformation{{$booking->id}}">
                                    View Booking
                                </button>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="6">No bookings yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            @include('admin.bookings.requests.show') <!-- modal view -->

        </div>
    </div>
@endsection