<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Repositories\Booking\BookingRepositoryInterface;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    protected $booking;

    public function __construct(BookingRepositoryInterface $booking)
    {
        $this->booking = $booking;
    }

    public function getBooking($bookingReference)
    {
        return $this->booking->findByReference($bookingReference);
    }
}
