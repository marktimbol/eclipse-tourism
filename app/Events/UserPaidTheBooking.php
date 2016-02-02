<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserPaidTheBooking extends Event
{
    use SerializesModels;

    public $user;

    public $bookingReference;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user, $bookingReference)
    {
        $this->user = $user;
        $this->bookingReference = $bookingReference;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
