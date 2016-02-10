<?php

namespace Eclipse\Repositories\Booking;

use App\Booking;

class BookingRepository implements BookingRepositoryInterface {

	public function findByReference($reference) {
		return Booking::with('user', 'packages.photos', 'packages.tickets')
			->where('booking_reference', $reference)->first();
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