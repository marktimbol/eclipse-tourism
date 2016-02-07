<?php

function flash($title = null, $message = null)
{
	$flash = app('App\Http\Flash');
	if( func_num_args() == 0 )
	{
		return $flash;
	}

	return $flash->info($title, $message);
}

function companyName()
{
	return env('COMPANY_NAME');
}

function companyEmail()
{
	return env('COMPANY_EMAIL');
}

function calculateTotalAmount($packages)
{
    $subtotal = 0;

    $total = 0;

    foreach( $packages as $package )
    {
        $subtotal = ( $package->adult_price * $package->pivot->adult_quantity ) +
                    ( $package->child_price * $package->pivot->child_quantity );

        $total += $subtotal;
    }

    return $total;
}

/**
 * Check to see if the package is subject for availability or no
 */
function subjectForAvailability($package)
{
	return $package->options->package->confirm_availability;
}

function bookingReference($transaction)
{
    $paymentGateway = env('PAYMENT_GATEWAY');

    if ( $paymentGateway == 'stripe' )
    {    
        return $transaction->id;
    }
    elseif ( $paymentGateway == 'twocheckout' )
    {
        return $transaction['response']['orderNumber'];
    }

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

function setDefaultCurrency()
{
	session(['currency' => 'AED']);
}

function formatNumber($number)
{
	return number_format($number);	
}

/**
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
	if( count($photos) > 0 )
	{
		foreach( $photos as $photo )
		{
			return '<img class="b-lazy responsive-img" 
						src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
					 	data-src="'. asset('/images/uploads/'. $photo->path).'"		
						alt="'.$photo->imageable->name .'" 
					/>';
		}

	} 
	
	return defaultImage();
	
}

function packagePhoto($path)
{
	return asset('/images/uploads/' . $path);
}

function photoUrl($path)
{
	return '<img src="'. asset('/images/uploads/'.$path) .'" 
			alt="" 
			title=""
			class="responsive-img img-rounded" />';
}

function display($photos, $class='', $width = '')
{	
	if( count($photos) > 0 )
	{
		foreach( $photos as $photo )
		{
			return '<img src="'. asset('/images/uploads/'.$photo->path) .'" 
					alt="'.$photo->imageable->name .'" 
					title="'.$photo->imageable->name.'" 
					width="'.$width.'"
					class="responsive-img '.$class.'" />';
		}

	} 

	return defaultImage();
	
}

function displayAll($photos, $class='')
{
	if( count($photos) > 0 )
	{
		$html = '';
		foreach( $photos as $photo )
		{
			$html .= '<img src="'. asset('/images/uploads/'.$photo->path) .'" 
					alt="'.$photo->imageable->name .'" 
					title="'.$photo->imageable->name.'" 
					class="responsive-img '.$class.'" />';
		}

		return $html;

	} 
	
	return defaultImage();
	
}

function getUploadedPhoto($filename)
{
	if( ! empty($filename) )
	{
		return '<img src="'.asset('images/uploads/'. $filename).'" 
					alt="" 
					title=""
					class="img-responsive img-rounded" />';
	} 
	
	return defaultImage($title);
	
}

function getPhoto($filename, $title = "Eclipse Tourism", $class="img-rounded")
{
	if( ! empty($filename) )
	{
		return '<img src="'.asset('images/'. $filename).'" 
					alt="'. $title.'" 
					title="'.$title .'"
					class="responsive-img '.$class.'" />';
	} 
	
	return defaultImage($title);
	
}

function getParallaxPhoto($filename, $title = "Eclipse Tourism")
{
	if( ! empty($filename) )
	{
		return '<img src="'.asset('images/'. $filename).'" 
					alt="'. $title.'" 
					title="'.$title .'" />';
	} 
	
	return defaultImage($title);
	
}

function getEmailAsset($filename, $title = "Eclipse Tourism")
{
	if( ! empty($filename) )
	{
		return '<img src="'.asset('images/email/'. $filename).'" 
					alt="'. $title.'" 
					title="'.$title .'"
					class="responsive-img" />';
	} 
	
	return defaultImage($title);
	
}

function defaultImage($title = "Eclipse Tourism")
{
	return '<img src="'.asset('/images/default.jpg').'" 
				alt="'. $title.'" 
				title="'.$title .'" 
				width=70
				class="img-responsive responsive-img" />';
}