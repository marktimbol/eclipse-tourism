<?php

namespace Eclipse\Repositories\Booking;

use App\Booking;
use App\User;
use Gloudemans\Shoppingcart\CartCollection;

interface BookingRepositoryInterface {

	public function findByReference($reference);

	public function createBooking(User $user, $data);

	public function attachPackages(Booking $booking, CartCollection $items);

	public function paid();

	public function notPaid();

}