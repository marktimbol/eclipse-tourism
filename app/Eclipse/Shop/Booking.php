<?php

namespace Eclipse\Shop;

use Gloudemans\Shoppingcart\Facades\Cart;

class Booking {

	public function add(array $content)
	{
		return Cart::instance('booking')->add($content);
	}	
	
	public function content()
	{
		return Cart::instance('booking')->content();
	}	

	public function total()
	{
		return Cart::instance('booking')->total();
	}

	public function count()
	{
		return Cart::instance('booking')->count(false);
	}	

	public function update($rowId, $quantity)
	{
		return Cart::instance('booking')->update($rowId, $quantity);
	}	

	public function remove($rowId)
	{
		Cart::instance('booking')->remove($rowId);
	}	

	public function destroy()
	{
		Cart::instance('booking')->destroy();
	}	

}