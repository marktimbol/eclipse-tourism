<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CartCheckoutRequest;
use App\Jobs\AddItemInCart;
use App\Jobs\ProcessCartOrder;
use Eclipse\Shop\ShoppingCart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cart;

    public function __construct(ShoppingCart $cart)
    {
        $this->cart = $cart;
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
        return $this->dispatchFrom(AddItemInCart::class, $request);
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
        $this->dispatchFrom(ProcessCartOrder::class, $request);        
        
        flash()->overlay( companyName(), 'You have successfully booked the Package. Please check your email.');

        return redirect()->route('cart.checkout.success');
    }

    public function checkoutSuccess()
    {
        return view('public.checkout-success');
    }

}
