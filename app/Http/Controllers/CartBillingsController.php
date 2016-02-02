<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\BookingCheckoutRequest;
use App\Http\Requests\BookingPaymentCheckoutRequest;
use App\Http\Requests\CartCheckoutRequest;
use App\Jobs\ProcessBookingOrder;
use App\Jobs\ProcessBookingPayment;
use App\Jobs\ProcessCartOrder;
use Eclipse\Repositories\Booking\BookingRepositoryInterface;
use Illuminate\Http\Request;

class CartBillingsController extends Controller
{
    protected $booking;

	public function __construct(BookingRepositoryInterface $booking)
    {
        $this->booking = $booking;
    }

    public function getCartCheckout()
    {
    	return view('public.cart.checkout');
    }

    public function cartCheckout(CartCheckoutRequest $request)
    {
        $this->dispatchFrom(ProcessCartOrder::class, $request);        
        
        flash()->overlay( companyName(), 'You have successfully booked the Package. Please check your email.');

        return redirect()->route('cart.checkout.success');
    }

    public function cartCheckoutSuccess()
    {
        return view('public.checkout-success');
    }

    public function getBookingCheckout()
    {
        return view('public.booking.checkout');
    }

    public function bookingCheckout(BookingCheckoutRequest $request)
    {
        $this->dispatchFrom(ProcessBookingOrder::class, $request);
    }

    public function bookingCheckoutSuccess()
    {
        return view('public.booking.booking-payment-success');
    }

    public function getBookingPayment($bookingReference)
    {    
        $bookingInformation = $this->booking->findByReference($bookingReference);

        \JavaScript::put([
            'bookingReference' => $bookingReference,
            'bookingInformation' => $bookingInformation
        ]);

        return view('public.booking.booking-payment');
    }   

    public function bookingPayment(BookingPaymentCheckoutRequest $request)
    {
        $this->dispatchFrom( ProcessBookingPayment::class, $request);

        flash()->overlay( companyName(), 'You have successfully paid your booking. Please check your email.'); 

        return redirect()->route('booking.payment.success', $request->booking_reference);
    }     

    public function getBookingPaymentSuccess()
    {
        return view('public.booking.booking-payment-success');
    }        
}
