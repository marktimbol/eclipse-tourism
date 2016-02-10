<?php

namespace Eclipse\Repositories\Booking;

interface BookingRepositoryInterface {

	public function findByReference($reference);

	public function paid();

	public function notPaid();

}