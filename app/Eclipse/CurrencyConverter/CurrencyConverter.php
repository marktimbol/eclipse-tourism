<?php
namespace Eclipse\CurrencyConverter;

use Florianv\LaravelSwap\Facades\Swap;

class CurrencyConverter {

	public function convert($amount, $toCurrency)
	{
		$fromCurrency = 'AED';
		$currencyPair = sprintf('%s/%s', $fromCurrency, $toCurrency);

		$value = Swap::quote($currencyPair)->getValue();

		return $amount * $value;
	}	

}