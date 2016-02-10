<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class BookingWasConfirmed extends Event
{
    use SerializesModels;

    public $user_id;
    public $bookingReference;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user_id, $bookingReference)
    {
        $this->user_id = $user_id;
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
