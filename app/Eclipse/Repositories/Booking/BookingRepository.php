<?php

namespace Eclipse\Repositories\Booking;

use App\Booking;

class BookingRepository implements BookingRepositoryInterface {
	
	public function all()
	{
		return Booking::with('user')->latest()->get();
	}

	public function find($id)
	{
		return Booking::with('user', 'packages.tickets')->findOrFail($id);
	}

	public function paid()
	{
		return Booking::with('user', 'packages.tickets')->latest()->wherePaid(true)->get();
	}

	public function notPaid()
	{
		return Booking::with('user', 'packages.tickets')->latest()->wherePaid(false)->get();
	}

	public function findByReference($reference)
	{
		return Booking::with('user', 'packages.photos', 'packages.tickets')->where('booking_reference', $reference)->first();
	}

	public function store($data)
	{
		return Booking::create($data);
	}

	public function update($id, $data)
	{	
		$Booking = $this->find($id);
		$Booking->fill($data);
		
		$Booking->save();
	}

	public function delete($id)
	{
		$Booking = $this->find($id);
		
		$Booking->delete();
	}
}