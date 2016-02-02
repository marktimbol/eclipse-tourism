<?php

namespace App\Http\Controllers\Api\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Shop\ShoppingCart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    protected $cart;

    public function __construct(ShoppingCart $cart)
    {
        $this->cart = $cart;
    }

    public function content()
    {
        return $this->cart->content();
    }

    public function count()
    {
        return $this->cart->count();
    }

    public function total()
    {
        return $this->cart->total();
    }
}
