<?php

namespace Eclipse\Repositories\Booking;

use App\Booking;
use App\User;
use Eclipse\Shop\Booking as ItemsInBooking;
use Gloudemans\Shoppingcart\CartCollection;

class BookingRepository implements BookingRepositoryInterface {

	public function findByReference($reference)
    {
		return Booking::with('user', 'packages.photos', 'packages.tickets')
			->where('booking_reference', $reference)->first();
	}

	public function createBooking(User $user, $data)
	{
        return $user->bookings()->create([
            'booking_reference' => $data['booking_reference'],
            'paid'              => $data['paid'],
            'status'            => $data['status'],
            'comments'          => $data['comments']
        ]); 
	}

	public function attachPackages(Booking $booking, CartCollection $items)
	{
        foreach( $items as $item )
        {
            $packageId = $item->options->selectedPackage->id;
            $quantity = $item->qty;
            $child_quantity = $item->options->child_quantity;

            /**
             * Save the data to "booking_details" table
             */
            $booking->packages()->attach($packageId, [
                'adult_quantity'    => $quantity,
                'child_quantity'    => $child_quantity,
                'date'              => $item->options->date,   //Day, Month Year
                'date_submit'       => $item->options->date_submit, //YYYY-MM-DD
                'time'              => $item->options->time ?: ''                    
                ]);       
        }
	}

	public function paid() {
		return Booking::with('user', 'packages.tickets')
			->latest()
			->wherePaid(true)
			->get();
	}

	public function notPaid() {
		return Booking::with('user', 'packages.tickets')
			->latest()
			->wherePaid(false)
			->get();
	}
}