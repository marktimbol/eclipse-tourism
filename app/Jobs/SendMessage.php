<?php

namespace App\Jobs;

use App\Events\UserSubmittedAnEnquiry;
use App\Jobs\Job;
use App\Message;
use Illuminate\Contracts\Bus\SelfHandling;

class SendMessage extends Job
{
    public $name;
    public $email;
    public $phone;
    public $message;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = [
            'name'      => $this->name,
            'email'     => $this->email,
            'phone'     => $this->phone,
            'message'   => $this->message
        ];

        $inquiry = Message::create($data);

        event( new UserSubmittedAnEnquiry($inquiry) );
    }
}
