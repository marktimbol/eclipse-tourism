<?php

namespace App\Http\Controllers;

use App\Events\UserPurchaseWasNotSuccessful;
use App\Events\UserPurchasedAPackage;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CartCheckoutRequest;
use App\Jobs\AddItemInCart;
use Eclipse\Billings\BillingGateway;
use Eclipse\Repositories\User\UserRepositoryInterface;
use Eclipse\Shop\ShoppingCart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $user;
    
    protected $cart;

    protected $gateway;

    public function __construct(UserRepositoryInterface $user, ShoppingCart $cart, BillingGateway $gateway)
    {
        $this->user = $user;

        $this->cart = $cart;

        $this->gateway = $gateway;
    }

    public function index()
    {
        \JavaScript::put([
            'total' => $this->cart->total()
        ]);

        return view('public.cart.index');
    }

    public function store(Request $request)
    {
        $this->dispatch(
            new AddItemInCart(
                $request->package_id, $request->quantity, $request->child_quantity, 
                $request->date, $request->date_submit, $request->time, $request->ticket
            )
        );
    }

    public function update(Request $request)
    {   
        $child_quantity = intval($request->child_quantity);

        if( $child_quantity < 0 )
        {
            $child_quantity = 0;
        }

        $this->cart->update($request->rowId, [
            'options'   => [
                'child_quantity'    => $child_quantity
            ]
        ]);

        $this->cart->update($request->rowId, $request->adult_quantity);

        return $this->cart->content();
    }

    public function destroy($rowId)
    {
        $this->cart->remove($rowId);

        return $this->cart->content();
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

        $transaction = $this->gateway->charge($user, $this->cart->total(), $request->token);

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

        /**
         * Save the data to "bookings" table
         */
        $booking = $user->bookings()->create([
            'booking_reference' => bookingReference($transaction),
            'paid'              => $transaction->paid,
            'status'            => $transaction->status,
            'comments'          => ''
        ]); 

        foreach( $this->cart->content() as $item )
        {
            $packageId = $item->options->selectedPackage->id;
            $adult_quantity = $item->qty;
            $child_quantity = $item->options->child_quantity;

            /**
             * Save the data to "booking_details" table
             */
            $booking->packages()->attach($packageId, [
                'adult_quantity'    => $adult_quantity,
                'child_quantity'    => $child_quantity,
                'date'              => $item->options->date,   //Day, Month Year
                'date_submit'       => $item->options->date_submit, //YYYY-MM-DD
                'time'              => $item->options->time,
                'ticket'            => $item->options->ticket             
                ]);       
        }

        $this->cart->destroy();

        event( new UserPurchasedAPackage($user, $booking->booking_reference) );

        flash()->overlay('You have successfully booked the Package(s).');

        return redirect()->route('cart.checkout.success');
    }

    public function checkoutSuccess()
    {
        return view('public.checkout-success');
    }
}
