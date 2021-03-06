<?php

namespace Eclipse\Shop;

use Gloudemans\Shoppingcart\Facades\Cart;

class Booking {

	public static function add(array $content)
	{
		return Cart::instance('booking')->add($content);
	}
	
	public static function content()
	{
		return Cart::instance('booking')->content();
	}	

	public static function total()
	{
		return Cart::instance('booking')->total();
	}

	public static function count()
	{
		return Cart::instance('booking')->count(false);
	}	

	public static function update($rowId, $quantity)
	{
		return Cart::instance('booking')->update($rowId, $quantity);
	}	

	public static function remove($rowId)
	{
		Cart::instance('booking')->remove($rowId);
	}	

	public static function destroy()
	{
		Cart::instance('booking')->destroy();
	}	

}