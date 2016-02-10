<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Eclipse\Repositories\Booking\BookingRepositoryInterface;
use Eclipse\Repositories\User\UserRepositoryInterface;

class BookingsController extends Controller
{
    protected $booking;
    protected $user;

    public function __construct(BookingRepositoryInterface $booking, UserRepositoryInterface $user)
    {
        $this->booking = $booking;
        $this->user = $user;
    }

    public function index()
    {
        $bookings = $this->booking->paid();
        return view('admin.bookings.index', compact('bookings'));
    }

    public function uponRequests()
    {
        $bookings = $this->booking->notPaid();
        return view('admin.bookings.requests.index', compact('bookings'));
    }

    public function confirm($bookingReference, $user_id)
    {
        // event( new BookingWasConfirmed($user_id, $bookingReference) );
        // flash()->success('An email was sent to the customer.');

        // return redirect()->route('admin.bookings.index');
    }   

}
