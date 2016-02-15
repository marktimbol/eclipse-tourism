<?php


Route::group(['middleware' => 'web'], function() {
	/*
	|--------------------------------------------------------------------------
	| Authentication Routes
	|--------------------------------------------------------------------------
	*/
	Route::auth();

	/*
	|--------------------------------------------------------------------------
	| Pulic pages Routes
	|--------------------------------------------------------------------------
	*/
	Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
	Route::post('change-currency', ['as' => 'change-currency', 'uses' => 'PagesController@changeCurrency']);

	Route::get('tourist-information', ['as' => 'tourist-information', 'uses' => 'PagesController@touristInformation']);
	Route::get('corporate', ['as' => 'corporate', 'uses' => 'PagesController@corporate']);
	Route::get('about', ['as' => 'about', 'uses' => 'PagesController@about']);
	Route::get('contact', ['as' => 'contact', 'uses' => 'PagesController@contact']);
	Route::post('contact', ['as' => 'contact.submit', 'uses' => 'PagesController@submitContact']);
	Route::get('terms-and-conditions', ['as' => 'terms-and-conditions', 'uses' => 'PagesController@termsAndConditions']);
	Route::get('privacy-policy', ['as' => 'privacy-policy', 'uses' => 'PagesController@privacyPolicy']);

	/*
	|--------------------------------------------------------------------------
	| Deals Routes
	|--------------------------------------------------------------------------
	*/
	Route::get('deals/{deal}', ['as' => 'deals.show', 'uses' => 'DealsController@show']);
	Route::get('deals', ['as' => 'deals', 'uses' => 'DealsController@index']);

	/*
	|--------------------------------------------------------------------------
	| Packages Routes
	|--------------------------------------------------------------------------
	*/
	Route::get('category/{category}', ['as' => 'category', 'uses' => 'CategoriesController@getPackagesPerCategory']);
	Route::get('packages', ['as' => 'packages', 'uses' => 'PackagesController@index']);
	Route::get('package/{package}', ['as' => 'package', 'uses' => 'PackagesController@package']);

	/*
	|--------------------------------------------------------------------------
	| Shopping Cart Routes
	|--------------------------------------------------------------------------
	*/
	Route::get('cart/checkout', ['as' => 'cart.checkout', 'uses' => 'CartController@checkout']);
	Route::post('cart/checkout', ['as' => 'cart.checkout', 'uses' => 'CartController@onCheckout']);
	Route::get('cart/checkout/success', ['as' => 'cart.checkout.success', 'uses' => 'CartController@checkoutSuccess']);
	Route::resource('cart', 'CartController');

	/*
	|--------------------------------------------------------------------------
	| Booking Routes
	|--------------------------------------------------------------------------
	*/
	Route::get('booking/checkout', ['as' => 'booking.checkout', 'uses' => 'BookingsController@checkout']);
	Route::post('booking/checkout', ['as' => 'booking.checkout', 'uses' => 'BookingsController@onCheckout']);
	Route::resource('booking', 'BookingsController');
	// Route::get('booking/checkout/success', ['as' => 'booking.checkout.success', 'uses' => 'BookingsController@checkoutSuccess']);

	// Route::get('booking/{bookingReference}/payment', ['as' => 'booking.payment', 'uses' => 'BookingsController@getBookingPayment']);
	// Route::put('booking/{bookingReference}/payment', ['as' => 'booking.payment', 'uses' => 'BookingsController@onBookingPayment']);
	// Route::get('booking/{bookingReference}/payment/success', ['as' => 'booking.payment.success', 'uses' => 'BookingsController@bookingPaymentSuccess']);
});

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'admin'], function() {
	/*
	|--------------------------------------------------------------------------
	| Dashboard Route
	|--------------------------------------------------------------------------
	*/
	Route::get('/', ['as' => 'admin.home', 'uses' => 'Admin\AdminController@home']);

	/*
	|--------------------------------------------------------------------------
	| Package photos Route
	|--------------------------------------------------------------------------
	*/
	Route::post('packages/photos/upload', [
				'as' => 'admin.packages.photos.upload', 
				'uses' => 'Admin\PhotosController@uploadPackagePhoto'
			]);	

	Route::delete('packages/photos/delete/{path}', [
				'as' => 'admin.packages.photos.delete', 
				'uses' => 'Admin\PhotosController@deletePackagePhoto'
			]);		
	/*
	|--------------------------------------------------------------------------
	| Categories Route
	|--------------------------------------------------------------------------
	*/
	Route::resource('categories', 'Admin\CategoriesController');

	/*
	|--------------------------------------------------------------------------
	| Packages Information Route
	|--------------------------------------------------------------------------
	*/
	Route::post('packages/{packageId}/information/', 'Admin\PackagesInformationController@store');
	Route::put('packages/{packageId}/information/{id}', 'Admin\PackagesInformationController@update');
	Route::delete('packages/{packageId}/information/{id}', 'Admin\PackagesInformationController@destroy');

	/*
	|--------------------------------------------------------------------------
	| Package Ticket options Route
	|--------------------------------------------------------------------------
	*/
	Route::post('packages/{packageId}/tickets/', 'Admin\TicketsController@store');
	Route::put('packages/{packageId}/tickets/{id}', 'Admin\TicketsController@update');
	Route::delete('packages/{packageId}/tickets/{id}', 'Admin\TicketsController@destroy');

	Route::post('tickets/{tickets}/information', 'Admin\TicketsInformationController@store');
	Route::put('tickets/{tickets}/information/{id}', 'Admin\TicketsInformationController@update');
	Route::delete('tickets/{tickets}/information/{id}', 'Admin\TicketsInformationController@destroy');

	/*
	|--------------------------------------------------------------------------
	| Packages Route
	|--------------------------------------------------------------------------
	*/
	Route::resource('packages', 'Admin\PackagesController');

	/*
	|--------------------------------------------------------------------------
	| Promo photos Route
	|--------------------------------------------------------------------------
	*/
	Route::post('deals/{deals}/photos/upload', [
				'as' => 'admin.deals.photos.upload', 
				'uses' => 'Admin\PhotosController@uploadPromoPhoto'
			]);	

	Route::delete('deals/photos/delete/{path}', [
				'as' => 'admin.deals.photos.delete', 
				'uses' => 'Admin\PhotosController@deletePromoPhoto'
			]);		
	/*
	|--------------------------------------------------------------------------
	| Promo / Deals Route
	|--------------------------------------------------------------------------
	*/
	Route::resource('deals', 'Admin\DealsController');
	
	/*
	|--------------------------------------------------------------------------
	| Confirm Booking Route
	|--------------------------------------------------------------------------
	*/
	Route::post('bookings/{bookingReference}/user/{user_id}/confirm', [
			'as' => 'bookings.confirm', 
			'uses' => 'Admin\BookingsController@confirm'
		]);

	/*
	|--------------------------------------------------------------------------
	| Bookings Route
	|--------------------------------------------------------------------------
	*/
	Route::get('bookings/upon-requests', [
			'as' => 'admin.bookings.upon-requests', 
			'uses' => 'Admin\BookingsController@uponRequests'
		]);
	Route::resource('bookings', 'Admin\BookingsController');
});

Route::group(['middleware' => 'web', 'prefix' => 'api/v1'], function()
{
	/*
	|--------------------------------------------------------------------------
	| Categories API Route
	|--------------------------------------------------------------------------
	*/
	Route::get('categories', [
			'as' => 'api.v1.categories', 
			'uses' => 'Api\CategoriesController@index'
		]);
	
	/*
	|--------------------------------------------------------------------------
	| Packages API Route
	|--------------------------------------------------------------------------
	*/
	Route::get('packages', ['as' => 'api.v1.packages', 'uses' => 'Api\PackagesController@index']);
	Route::get('featured-packages', ['as' => 'api.v1.featured-packages', 'uses' => 'Api\PackagesController@featuredPackages']);
	Route::get('package/{package}', ['as' => 'api.v1.package', 'uses' => 'Api\PackagesController@package']);
	
	/*
	|--------------------------------------------------------------------------
	| Shopping Cart API Route
	|--------------------------------------------------------------------------
	*/
	Route::get('cart/count', 'Api\Shop\ShoppingCartController@count');
	Route::get('cart/total', 'Api\Shop\ShoppingCartController@total');
	Route::get('cart', 'Api\Shop\ShoppingCartController@content');

	/*
	|--------------------------------------------------------------------------
	| Bookings API Route
	|--------------------------------------------------------------------------
	*/
	Route::get('booking/count', 'Api\Shop\BookingsController@count');
	Route::get('booking/total', 'Api\Shop\BookingsController@total');
	Route::get('booking/{bookingReference}', 'Api\Shop\BookingsController@getBooking');
	Route::get('booking', 'Api\Shop\BookingsController@content');

	/*
	|--------------------------------------------------------------------------
	| Package Information API Route
	|--------------------------------------------------------------------------
	*/
	Route::get('packages/{packageId}/information', 'Api\PackagesInformationController@all');
	Route::get('packages/{packageId}/information/{id}', 'Api\PackagesInformationController@get');

	/*
	|--------------------------------------------------------------------------
	| Package Ticket options API Route
	|--------------------------------------------------------------------------
	*/
	Route::get('packages/{packageId}/tickets', 'Api\TicketsController@all');
	Route::get('packages/{packageId}/tickets/{id}', 'Api\TicketsController@get');
	
	/*
	|--------------------------------------------------------------------------
	| Ticket Information API Route
	|--------------------------------------------------------------------------
	*/
	Route::get('tickets/{tickets}/information', 'Api\TicketsInformationController@all');
	Route::get('tickets/{tickets}/information/{id}', 'Api\TicketsInformationController@get');

	/*
	|--------------------------------------------------------------------------
	| Convert amount to selected currency API Route
	|--------------------------------------------------------------------------
	*/
	Route::get('/convert-amount/{amount}/{currency}', 'PagesController@convertAmount');
});

