<?php

namespace App\Http\Controllers;

use App\Events\UserPurchaseWasNotSuccessful;
use App\Events\UserPurchasedAPackage;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CartCheckoutRequest;
use App\Jobs\AddItemInCart;
use Eclipse\Billings\BillingGateway;
use Eclipse\Repositories\Booking\BookingRepositoryInterface;
use Eclipse\Repositories\User\UserRepositoryInterface;
use Eclipse\Shop\ShoppingCart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $user;
    protected $booking;
    protected $gateway;

    public function __construct(UserRepositoryInterface $user, BookingRepositoryInterface $booking, BillingGateway $gateway)
    {
        $this->user = $user;
        $this->booking = $booking;
        $this->gateway = $gateway;
    }

    public function index()
    {
        \JavaScript::put([
            'total' => ShoppingCart::total()
        ]);

        return view('public.cart.index');
    }

    public function store(Request $request)
    {
        $this->dispatch(
            new AddItemInCart(
                $request->package_id, 
                $request->quantity, 
                $request->child_quantity, 
                $request->date, 
                $request->date_submit, 
                $request->time, 
                $request->ticket
            )
        );
    }

    public function update(Request $request)
    {   
        $child_quantity = intval($request->child_quantity);

        if( $child_quantity < 0 ) {
            $child_quantity = 0;
        }

        ShoppingCart::update($request->rowId, [
            'options'   => [
                'child_quantity'    => $child_quantity
            ]
        ]);

        ShoppingCart::update($request->rowId, $request->adult_quantity);

        return ShoppingCart::content();
    }

    public function destroy($rowId)
    {
        ShoppingCart::remove($rowId);
        return ShoppingCart::content();
    }

    public function checkout()
    {
        return view('public.cart.checkout');
    }        

    public function onCheckout(CartCheckoutRequest $request)
    {
        $userInput = [
            'name'              => $request->name,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'address1'          => $request->address1,
            'address2'          => $request->address2,
            'city'              => $request->city,
            'state'             => $request->state,
            'country'           => $request->country,
            'cardName'          => $request->cardName,
            'cardBrand'         => $request->cardBrand,
            'cardLastFour'      => $request->cardLastFour,
            'cardExpiryMonth'   => $request->cardExpiryMonth,
            'cardExpiryYear'    => $request->cardExpiryYear    
        ]; 

        $user = $this->user->store($userInput);        

        $transaction = $this->gateway->charge($user, ShoppingCart::total(), $request->token);

        if( ! $transaction )
        {
            event( new UserPurchaseWasNotSuccessful($user) );

            /**
             * If payment is not successful, delete the user to avoid duplicating his/her
             * record on the "users" table
             */
            $this->user->delete($user->id);

            flash()->error('Your card was declined. Please try again.');

            return redirect()->back()->withInput();
        }

        $bookingData = [
            'booking_reference' => bookingReference($transaction),
            'paid'              => $transaction->paid,
            'status'            => $transaction->status,
            'comments'          => ''
        ];

        $booking = $this->booking->createBooking($user, $bookingData);

        /**
         * Attach the selected packages on the bookings table
         */
        $this->booking->attachPackages($booking, ShoppingCart::content());

        /**
         * Delete the Booked items
         */
        ShoppingCart::destroy();

        /**
         * Fire off an event
         */
        event( new UserPurchasedAPackage($user, $booking->booking_reference) );

        flash()->overlay('You have successfully booked the Package(s).');

        return redirect()->route('cart.checkout.success');
    }

    public function checkoutSuccess()
    {
        return view('public.checkout-success');
    }
}
