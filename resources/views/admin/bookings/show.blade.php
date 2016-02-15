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
                        <div class="col-md-6">
                            <h4>Personal Information</h4>
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Name:</strong> {{ $booking->user->name }}</li>
                                <li class="list-group-item"><strong>Email:</strong> {{ $booking->user->email }}</li>
                                <li class="list-group-item"><strong>Phone:</strong> {{ $booking->user->phone }}</li>
                                <li class="list-group-item"><strong>Address 1:</strong> {{ $booking->user->address1 . ', ' . $booking->user->address2 }}</li>
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <h4>Card Information</h4>
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Name:</strong> {{ $booking->user->cardName }}</li>
                                <li class="list-group-item"><strong>Brand:</strong> {{ $booking->user->cardBrand }}</li>
                                <li class="list-group-item"><strong>Card Number:</strong> 
                                    {{ $booking->user->cardLastFour ? '**** **** **** ' . $booking->user->cardLastFour : '' }}
                                </li>
                                <li class="list-group-item"><strong>Expiry:</strong> 
                                    {{ $booking->user->cardExpiryMonth ? $booking->user->cardExpiryMonth . '/' . $booking->user->cardExpiryYear : '' }}
                                </li>
                            </ul>  
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h4>Booked Packages</h4>
                        </div>
                    </div>

                    <div class="cart">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Package</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th class="text-right">Subtotal</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $total = 0; ?>

                                @foreach($booking->packages as $package)
                                    <?php
                                        $adultPrice = $package->adult_price;
                                        $childPrice = $package->child_price;
                                        $ticketName = '';
                                        $ticketDuration = '';

                                        if( $package->has_ticket_option )
                                        {
                                            $ticketId = $package->pivot->ticket;

                                            foreach( $package->tickets as $ticket )
                                            {
                                                if( $ticketId == $ticket->id )
                                                {
                                                    $adultPrice = $ticket->adultPrice;
                                                    $childPrice = $ticket->childPrice;
                                                    $ticketName = $ticket->name . ' Ticket';
                                                    $ticketDuration = $ticket->duration;
                                                }
                                            }
                                        }
                                    ?>
                                        <tr>
                                            <td width="500">
                                                <p>
                                                    {{ $package->name }}<br />
                                                    {{ $ticketName }}<br />
                                                    {{ $ticketDuration }}
                                                </p>
                                                <p class="text-muted">
                                                    <i class="fa fa-calendar"></i> 
                                                    {{ $package->pivot->date }}
                                                    {{ $package->pivot->time }}
                                                </p>

                                                <ul class="collection">
                                                    <li class="collection-item">
                                                        Child:
                                                        {{ $package->pivot->child_quantity }} &times; 
                                                        {{ number_format($childPrice) }} <span class="current-currency">AED</span>
                                                    </li>
                                                </ul>
                                                
                                            </td>

                                            <td class="nowrap">{{ number_format($adultPrice) }}  <span class="current-currency">AED</span></td>
                                            
                                            <td>
                                                {{ $package->pivot->adult_quantity }}
                                            </td>

                                            <td class="text-right nowrap">
                                                <?php
                                                $subtotal =  ($adultPrice * $package->pivot->adult_quantity) + ($childPrice * $package->pivot->child_quantity);
                                                ?>
                                                {{ number_format($subtotal) }} <span class="current-currency">AED</span>
                                            </td>

                                            <?php 
                                                $total += $subtotal; 
                                            ?>
                                        </tr>
                                   

                                @endforeach

                                <tr>
                                    <td colspan="4">
                                        <h4 class="text-right">Total: {{ number_format($total) }} <span class="current-currency">AED</span></h4>
                                    </td>
                                </tr>

                            </tbody>   
                        </table>
{{--                         @if( $paid == 0 )

                            <div class="alert alert-danger">
                                <p class="text-center">NOT YET PAID</p>
                            </div>  

                            <form method="POST" action="{{ route('bookings.confirm', [ $booking_reference, $user->id ]) }}">
                                {!! csrf_field() !!}

                                <button type="submit" class="btn btn-success">
                                    Date is confirmed, send the confirmation email to customer
                                </button>

                            </form>

                        @elseif( $paid == 1)
                        
                            <div class="alert alert-success">
                                <p class="text-center">PAID</p>
                            </div>  
                        
                        @endif     --}}    

                        @if( $booking->paid )
                            <div class="alert alert-success">
                                <p class="text-center">PAID</p>
                            </div>  
                        @endif
                    </div>                            

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endforeach