<?php

namespace App\Http\Controllers\Api\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Repositories\Booking\BookingRepositoryInterface;
use Eclipse\Shop\Booking;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    protected $bookingRepo;

    public function __construct(BookingRepositoryInterface $bookingRepo)
    {
        $this->bookingRepo = $bookingRepo;
    }

    public function content()
    {
        return Booking::content();
    }

    public function count()
    {
        return Booking::count();
    }

    public function total()
    {
        return Booking::total();
    }

    public function getBooking($bookingReference)
    {
        return $this->bookingRepo->findByReference($bookingReference);
    }
}
