<?php

function flash($title = null, $message = null)
{
	$flash = app('App\Http\Flash');
	
	if( func_num_args() == 0 ) {
		return $flash;
	}

	return $flash->info($title, $message);
}

function calculateTotalAmount($packages)
{
    $subtotal = 0;
    $total = 0;

    foreach( $packages as $package ) {
        $subtotal = ( $package->adult_price * $package->pivot->adult_quantity ) +
                    ( $package->child_price * $package->pivot->child_quantity );

        $total += $subtotal;
    }

    return $total;
}

function subjectForAvailability($package)
{
	return $package->options->package->confirm_availability;
}

/**
 * App\Jobs\ProcessCardOrder;
 */
function bookingReference($transaction)
{
    $paymentGateway = config('eclipse.paymentGateway');

    switch($paymentGateway)
    {
    	case 'stripe':
    		return $transaction->id;
    	case 'twocheckout':
    		return $transaction['response']['orderNumber'];
    	default:
    		return time();
    }
}

/**
 * App\Http\Controllers\PagesController;
 */
function setDefaultCurrency() {
	session(['currency' => 'AED']);
}

function currentCurrency()
{
    if( empty( session('currency') ) )
    {
        session(['currency' => 'AED']);	
    	return session('currency');
    }

    return session('currency');
}

/**
 * Format numbers in email views
 */
function formatNumber($number) {
	return number_format($number);	
}

/**
 * App\Http\Controllers\PagesController
 * Display the converted amount and currency format
 */
function convertedAmountWithCurrency($amount, $currency)
{
	$converter = app('Eclipse\CurrencyConverter\CurrencyConverter');
	$result = $converter->convert($amount, $currency);
	// $formattedResult = number_format(floor($result));
	$formattedResult = floor($result);

	return $formattedResult;
	// $html = $formattedResult . '&nbsp; <span class="current-currency">' . $currency .'</span>';
	// return $html;
}

/**
 * Eclipse\Billings\StripeBilling
 * Convert the amount in USD for Stripe payment
 */
function convertAmountInUSD($amount)
{
	$toCurrency = 'USD';
	$converter = app('Eclipse\CurrencyConverter\CurrencyConverter');

	return $converter->convert($amount, $toCurrency);
}

function beLazy($photos)
{
	if( count($photos) > 0 ) {
		foreach( $photos as $photo ) {
			return '<img class="b-lazy responsive-img" 
						src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
					 	data-src="'. asset('/images/uploads/'. $photo->path).'"		
						alt="'.$photo->imageable->name .'" 
					/>';
		}
	} 
	return defaultImage();
}

function packagePhoto($path) {
	return asset('/images/uploads/' . $path);
}

function photoUrl($path) {
	return '<img src="'. asset('/images/uploads/'.$path) .'" 
			alt="" 
			title=""
			class="responsive-img img-rounded" />';
}

function display($photos, $class='', $width = '') {	
	if( count($photos) > 0 ) {
		foreach( $photos as $photo ) {
			return '<img src="'. asset('/images/uploads/'.$photo->path) .'" 
					alt="'.$photo->imageable->name .'" 
					title="'.$photo->imageable->name.'" 
					width="'.$width.'"
					class="responsive-img '.$class.'" />';
		}

	} 
	return defaultImage();
}

function displayAll($photos, $class='') {
	if( count($photos) > 0 ) {
		$html = '';
		foreach( $photos as $photo ) {
			$html .= '<img src="'. asset('/images/uploads/'.$photo->path) .'" 
					alt="'.$photo->imageable->name .'" 
					title="'.$photo->imageable->name.'" 
					class="responsive-img '.$class.'" />';
		}
		return $html;
	} 
	
	return defaultImage();
}

function getUploadedPhoto($filename) {
	if( ! empty($filename) ) {
		return '<img src="'.asset('images/uploads/'. $filename).'" 
					alt="" 
					title=""
					class="img-responsive img-rounded" />';
	} 
	return defaultImage($title);
}

function getPhoto($filename, $title = "Eclipse Tourism", $class="img-rounded") {
	if( ! empty($filename) ) {
		return '<img src="'.asset('images/'. $filename).'" 
					alt="'. $title.'" 
					title="'.$title .'"
					class="responsive-img '.$class.'" />';
	} 
	return defaultImage($title);
}

function getParallaxPhoto($filename, $title = "Eclipse Tourism") {
	if( ! empty($filename) ) {
		return '<img src="'.asset('images/'. $filename).'" 
					alt="'. $title.'" 
					title="'.$title .'" />';
	} 
	return defaultImage($title);
}

function getEmailAsset($filename) {
	if( ! empty($filename) ) {
		return '<img src="'.asset('images/email/'. $filename).'" 
					alt="'. config('eclipse.name').'" 
					title="'. config('eclipse.name') .'"
					class="responsive-img" />';
	} 
	return defaultImage($title);
}

function defaultImage() {
	return '<img src="'.asset('/images/default.jpg').'" 
				alt="'. config('eclipse.name') .'" 
				title="'. config('eclipse.name') .'" 
				width=70
				class="img-responsive responsive-img" />';
}