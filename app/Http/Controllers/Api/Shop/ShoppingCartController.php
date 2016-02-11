<?php

namespace App\Http\Controllers\Api\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Shop\ShoppingCart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function content()
    {
        return ShoppingCart::content();
    }

    public function count()
    {
        return ShoppingCart::count();
    }

    public function total()
    {
        return ShoppingCart::total();
    }
}
