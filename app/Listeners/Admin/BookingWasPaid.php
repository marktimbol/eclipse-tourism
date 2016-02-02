<?php

namespace App\Listeners\Admin;

use App\Events\UserPaidTheBooking;
use Eclipse\Mailers\AdminMailer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BookingWasPaid
{
    protected $mailer;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(AdminMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Handle the event.
     *
     * @param  UserPaidTheBooking  $event
     * @return void
     */
    public function handle(UserPaidTheBooking $event)
    {
        $this->mailer->sendBookingNotificationPayment($event->user, $event->bookingReference);
    }
}
