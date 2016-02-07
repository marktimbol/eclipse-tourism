<?php

use App\Booking;
use App\Events\BookingWasConfirmed;
use App\Events\UserBookedAPackage;
use App\Events\UserPurchasedAPackage;
use App\Package;
use Eclipse\Repositories\Booking\BookingRepositoryInterface;
use Eclipse\Repositories\User\UserRepositoryInterface;
use Eclipse\Shop\ShoppingCart;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('get-booking/{reference}', function($reference, BookingRepositoryInterface $booking) {
	$booking =  $booking->findByReference($reference);
	return $booking;
	
	foreach( $booking->packages as $package )
	{
		$adultPrice = $package->adult_price;
		$childPrice = $package->child_price;

		if( $package->has_ticket_option )
		{
			$ticketId = $package->pivot->ticket;

			foreach( $package->tickets as $ticket )
			{
				if( $ticketId == $ticket->id )
				{
					$adultPrice = $ticket->adultPrice;
					$childPrice = $ticket->childPrice;
					$ticketName = $ticket->name;
				}
			}
		}
	}

	dd( $adultPrice, $childPrice );
});

Route::get('paid', function()
{		
	return Booking::with('user', 'packages.tickets')->wherePaid(true)->get();
});

Route::get('not-paid', function()
{		
	return Booking::with('user', 'packages.tickets')->wherePaid(false)->get();
});

Route::get('purchase-check', function(UserRepositoryInterface $userRepo)
{		
	$user = $userRepo->find(5);

	$booking_reference = "1448455881";

	event( new UserPurchasedAPackage($user, $booking_reference) );

	return 'done';
});

Route::get('booking-check', function(UserRepositoryInterface $userRepo)
{		
	$user = $userRepo->find(6);

	$booking_reference = "1448535337";

	event( new UserBookedAPackage($user, $booking_reference) );

	return 'done';
});

Route::get('confirm-booking-check', function()
{		
	$booking_reference = "1448535337";

	$user_id = 6;

	event( new BookingWasConfirmed($user_id, $booking_reference) );

	return 'done';
});


Route::get('cart-instance', function(ShoppingCart $cart)
{
	return $cart->content();
});

Route::get('booking-instance', function(ShoppingCart $cart)
{
	return $cart->contentBooking();
});

Route::get('clear-booking', function(ShoppingCart $booking)
{
	$booking->destroyBooking();
});

Route::get('clear-cart', function(ShoppingCart $cart)
{
	$cart->destroy();
});

Event::listen('illuminate.query', function($query)
{
	// var_dump($query);
});

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
Route::post('change-currency', ['as' => 'change-currency', 'uses' => 'PagesController@changeCurrency']);

Route::get('deals', ['as' => 'deals', 'uses' => 'PagesController@deals']);
Route::get('tourist-information', ['as' => 'tourist-information', 'uses' => 'PagesController@touristInformation']);
Route::get('corporate', ['as' => 'corporate', 'uses' => 'PagesController@corporate']);
Route::get('about', ['as' => 'about', 'uses' => 'PagesController@about']);
Route::get('contact', ['as' => 'contact', 'uses' => 'PagesController@contact']);
Route::post('contact', ['as' => 'contact.submit', 'uses' => 'PagesController@submitContact']);

/*========= PACKAGES or TOURS =========*/
Route::get('category/{category}', ['as' => 'category', 'uses' => 'CategoriesController@getPackagesPerCategory']);
Route::get('packages', ['as' => 'packages', 'uses' => 'PackagesController@index']);
Route::get('package/{package}', ['as' => 'package', 'uses' => 'PackagesController@package']);

/*========= CART =========*/
Route::get('cart/checkout', ['as' => 'cart.checkout', 'uses' => 'CartController@checkout']);
Route::post('cart/checkout', ['as' => 'cart.checkout', 'uses' => 'CartController@onCheckout']);
Route::get('cart/checkout/success', ['as' => 'cart.checkout.success', 'uses' => 'CartController@checkoutSuccess']);
Route::resource('cart', 'CartController');

/*========= BOOKING =========*/
Route::get('booking/checkout', ['as' => 'booking.checkout', 'uses' => 'BookingsController@checkout']);
Route::post('booking/checkout', ['as' => 'booking.checkout', 'uses' => 'BookingsController@onCheckout']);
Route::get('booking/checkout/success', ['as' => 'booking.checkout.success', 'uses' => 'BookingsController@bookingSuccess']);

Route::get('booking/{bookingReference}/payment', ['as' => 'booking.payment', 'uses' => 'BookingsController@getBookingPayment']);
Route::put('booking/{bookingReference}/payment', ['as' => 'booking.payment', 'uses' => 'BookingsController@onBookingPayment']);
Route::get('booking/{bookingReference}/payment/success', ['as' => 'booking.payment.success', 'uses' => 'BookingsController@bookingPaymentSuccess']);

Route::resource('booking', 'BookingsController');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

Route::get('auth/login', 'AuthController@login');
Route::post('auth/login', 'AuthController@postLogin');
Route::get('auth/logout', 'AuthController@logout');

Route::get('auth/register', 'AuthController@register');
Route::post('auth/register', 'AuthController@postRegister');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
{	
	Route::get('/', ['as' => 'admin.home', 'uses' => 'Admin\AdminController@home']);
	
	Route::put('packages/photos/upload', [
				'as' => 'admin.packages.photos.upload', 
				'uses' => 'Admin\PhotosController@uploadPackagePhoto'
			]);	

	Route::delete('packages/photos/delete/{path}', [
				'as' => 'admin.packages.photos.delete', 
				'uses' => 'Admin\PhotosController@deletePackagePhoto'
			]);		
	
	Route::resource('categories', 'Admin\CategoriesController');

	Route::post('packages/{packageId}/information/', 'Admin\PackagesInformationController@store');
	Route::put('packages/{packageId}/information/{id}', 'Admin\PackagesInformationController@update');
	Route::delete('packages/{packageId}/information/{id}', 'Admin\PackagesInformationController@destroy');

	Route::post('packages/{packageId}/tickets/', 'Admin\TicketsController@store');
	Route::put('packages/{packageId}/tickets/{id}', 'Admin\TicketsController@update');
	Route::delete('packages/{packageId}/tickets/{id}', 'Admin\TicketsController@destroy');

	Route::resource('packages', 'Admin\PackagesController');

	Route::post('bookings/{bookingReference}/user/{user_id}/confirm', ['as' => 'bookings.confirm', 'uses' => 'Admin\BookingsController@confirm']);

	Route::get('bookings/upon-requests', ['as' => 'admin.bookings.upon-requests', 'uses' => 'Admin\BookingsController@uponRequests']);
	Route::resource('bookings', 'Admin\BookingsController');
	
});

Route::group(['prefix' => 'api/v1'], function()
{
	Route::get('categories', ['as' => 'api.v1.categories', 'uses' => 'Api\CategoriesController@index']);
	
	Route::get('packages', ['as' => 'api.v1.packages', 'uses' => 'Api\PackagesController@index']);
	Route::get('featured-packages', ['as' => 'api.v1.featured-packages', 'uses' => 'Api\PackagesController@featuredPackages']);
	Route::get('package/{package}', ['as' => 'api.v1.package', 'uses' => 'Api\PackagesController@package']);
	
	Route::get('cart/count', 'Api\Shop\ShoppingCartController@count');
	Route::get('cart/total', 'Api\Shop\ShoppingCartController@total');
	Route::get('cart', 'Api\Shop\ShoppingCartController@content');

	Route::get('booking/count', 'Api\Shop\BookingsController@count');
	Route::get('booking/total', 'Api\Shop\BookingsController@total');
	Route::get('booking/{bookingReference}', 'Api\Shop\BookingsController@getBooking');
	Route::get('booking', 'Api\Shop\BookingsController@content');

	Route::get('packages/{packageId}/information', 'Api\PackagesInformationController@all');

	Route::get('packages/{packageId}/tickets', 'Api\TicketsController@all');
	Route::get('packages/{packageId}/tickets/{id}', 'Api\TicketsController@get');
	
	Route::get('/convert-amount/{amount}/{currency}', 'PagesController@convertAmount');
});
