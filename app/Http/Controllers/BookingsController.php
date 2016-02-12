<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\BookingCheckoutRequest;
use App\Http\Requests\BookingPaymentCheckoutRequest;
use App\Jobs\AddItemInBooking;
use App\Jobs\ProcessBookingOrder;
use Eclipse\Shop\Booking;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index()
    {	
        return view('public.booking.index');
	}

    public function store(Request $request)
    {	
        $this->dispatch(
            new AddItemInBooking(
                $request->package_id, 
                $request->quantity, 
                $request->child_quantity, 
                $request->date, 
                $request->date_submit
            )
        );
    }	

    public function update(Request $request)
    {
        $child_quantity = intval($request->child_quantity);

        if( $child_quantity < 0 ) {
            $child_quantity = 0;
        }

        Booking::update($request->rowId, [
            'options'   => [
                'child_quantity'    => $child_quantity
            ]
        ]);

        Booking::update($request->rowId, $request->adult_quantity);

        return Booking::content();
    }

    public function destroy($rowId)
    {
        Booking::remove($rowId);
        return Booking::content();
    }

    public function checkout()
    {
        return view('public.booking.checkout');
    }

    public function onCheckout(BookingCheckoutRequest $request)
    {
        $this->dispatch(
            new ProcessBookingOrder(
                $request->name, 
                $request->email, 
                $request->phone, 
                $request->address1, 
                $request->address2,
                $request->city, 
                $request->state, 
                $request->country
            )
        );
    }

    // public function checkoutSuccess()
    // {
    //     return view('public.booking.booking-payment-success');
    // }

    // public function getBookingPayment($bookingReference)
    // {    
    //     $bookingInformation = $this->bookingRepository->findByReference($bookingReference);

    //     \JavaScript::put([
    //         'bookingReference' => $bookingReference,
    //         'bookingInformation' => $bookingInformation
    //     ]);

    //     return view('public.booking.booking-payment');
    // }  

    // public function onBookingPayment(BookingPaymentCheckoutRequest $request)
    // {
    //     $this->dispatch(
    //         new ProcessBookingOrder(
    //             $request->user_id, 
    //             $request->booking_reference, 
    //             $request->token, 
    //             $request->cardName, 
    //             $request->cardBrand,
    //             $request->cardLastFour, 
    //             $request->cardExpiryMonth, 
    //             $request->cardExpiryYear
    //         )
    //     );

    //     flash()->overlay('You have successfully paid your booking. Please check your email.'); 

    //     return redirect()->route('booking.payment.success', $request->booking_reference);
    // }    

    // public function bookingPaymentSuccess()
    // {
    //     return view('public.booking.booking-payment-success');
    // }  
}
