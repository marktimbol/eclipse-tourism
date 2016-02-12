<?php

namespace Eclipse\Repositories\Booking;

use App\Booking;
use App\User;
use Gloudemans\Shoppingcart\CartCollection;

class BookingRepository implements BookingRepositoryInterface {

    /**
     * Get the booking details by it's reference number
     *
     * @param $reference string
     */
	public function findByReference($reference)
    {
		return Booking::with('user', 'packages.photos', 'packages.tickets')
			->where('booking_reference', $reference)->first();
	}

    /**
     * Save the data to bookings table
     *
     * @param $user App\User
     * @param $data array
     */
	public function createBooking(User $user, $data)
	{
        return $user->bookings()->create([
            'booking_reference' => $data['booking_reference'],
            'paid'              => $data['paid'],
            'status'            => $data['status'],
            'comments'          => $data['comments']
        ]); 
	}

    /**
     * Attach the selected packages on the bookings table
     *
     * @param $booking App\Booking
     * @param $content Gloudemans\Shoppingcart\CartCollection
     */ 
	public function attachPackages(Booking $booking, CartCollection $items)
	{
        foreach( $items as $item )
        {
            $packageId = $item->options->selectedPackage->id;
            $quantity = $item->qty;
            $child_quantity = $item->options->child_quantity;

            $booking->packages()->attach($packageId, [
                'adult_quantity'    => $quantity,
                'child_quantity'    => $child_quantity,
                'date'              => $item->options->date,   //Day, Month Year
                'date_submit'       => $item->options->date_submit, //YYYY-MM-DD
                'time'              => $item->options->time ?: '',
                'ticket'            => $item->options->ticket ?: ''                    
                ]);       
        }
	}

    /**
     * Get all the paid bookings
     */
	public function paid() {
		return Booking::with('user', 'packages.tickets')
			->latest()
			->wherePaid(true)
			->get();
	}

    /**
     * Get all the unpaid booking. These are the upon 
     * requests booking.
     */
	public function notPaid() {
		return Booking::with('user', 'packages.tickets')
			->latest()
			->wherePaid(false)
			->get();
	}
}