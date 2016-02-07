@foreach( $bookings as $booking )
    <div class="modal fade" id="bookingInformation{{$booking->id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Booking Reference: {{ $booking->booking_reference }}</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Personal Information</h4>
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Name:</strong> {{ $booking->user->name }}</li>
                                <li class="list-group-item"><strong>Email:</strong> {{ $booking->user->email }}</li>
                                <li class="list-group-item"><strong>Phone:</strong> {{ $booking->user->phone }}</li>
                                <li class="list-group-item"><strong>Address 1:</strong> {{ $booking->user->address1 . ', ' . $booking->user->address2 }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h4>Request Packages</h4>
                        </div>
                    </div>

                    <div class="cart">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Package</th>
                                    <th>Adult Qty.</th>
                                    <th>Child Qty.</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $total = 0; ?>

                                @foreach($booking->packages as $package)
                                    <?php
                                        $adultPrice = $package->adult_price;
                                        $childPrice = $package->child_price;
                                        $ticketName = '';

                                        if( $package->has_ticket_option )
                                        {
                                            $ticketId = $package->pivot->ticket;

                                            foreach( $package->tickets as $ticket )
                                            {
                                                if( $ticketId == $ticket->id )
                                                {
                                                    $adultPrice = $ticket->adultPrice;
                                                    $childPrice = $ticket->childPrice;
                                                    $ticketName = ' - ' . $ticket->name . ' Ticket';
                                                }
                                            }
                                        }
                                    ?>
                                        <tr>
                                            <td width="500">
                                                <p>
                                                    {{ $package->name . $ticketName }} 
                                                </p>
                                                <p class="text-muted">
                                                    <i class="fa fa-calendar"></i> 
                                                    {{ $package->pivot->date }}
                                                    {{ $package->pivot->time }}
                                                </p>
                                            </td>
                                            <td>
                                                {{ $package->pivot->adult_quantity }} pax
                                            </td>

                                            <td>
                                                {{ $package->pivot->child_quantity }} pax
                                            </td>
                                        </tr>
                                @endforeach
                            </tbody>   
                        </table>
                    </div>                            

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endforeach