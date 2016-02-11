<?php

namespace Eclipse\Shop;

use Gloudemans\Shoppingcart\Facades\Cart;

class ShoppingCart {
	
	public static function add(array $content)
	{
		return Cart::instance('cart')->add($content);
	}

	public static function content()
	{
		return Cart::instance('cart')->content();
	}

	public static function total()
	{
		return Cart::instance('cart')->total();
	}

	public static function count()
	{
		return Cart::instance('cart')->count(false);
	}

	public static function get($rowId)
	{
		return Cart::instance('cart')->get($rowId);
	}

	public static function update($rowId, $quantity)
	{
		return Cart::instance('cart')->update($rowId, $quantity);
	}

	public static function remove($rowId)
	{
		Cart::instance('cart')->remove($rowId);
	}

	public static function destroy()
	{
		Cart::instance('cart')->destroy();
	}
}