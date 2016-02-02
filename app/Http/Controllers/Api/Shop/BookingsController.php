<?php

namespace App\Http\Controllers\Api\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Repositories\Booking\BookingRepositoryInterface;
use Eclipse\Shop\Booking;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    protected $booking;

    protected $bookingRepo;

    public function __construct(Booking $booking, BookingRepositoryInterface $bookingRepo)
    {
        $this->booking = $booking;

        $this->bookingRepo = $bookingRepo;
    }

    public function content()
    {
        return $this->booking->content();
    }

    public function count()
    {
        return $this->booking->count();
    }

    public function total()
    {
        return $this->booking->total();
    }

    public function getBooking($bookingReference)
    {
        return $this->bookingRepo->findByReference($bookingReference);
    }
}
