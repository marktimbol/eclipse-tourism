<?php

namespace App\Jobs;

use App\Events\UserBookedAPackage;
use App\Jobs\Job;
use Eclipse\Repositories\Booking\BookingRepositoryInterface;
use Eclipse\Repositories\User\UserRepositoryInterface;
use Eclipse\Shop\Booking;
use Illuminate\Contracts\Bus\SelfHandling;

class ProcessBookingOrder extends Job
{
    protected $name;
    protected $email;
    protected $phone;
    protected $address1;
    protected $address2;
    protected $city;
    protected $state;
    protected $country;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone, $address1, $address2, $city, $state, $country)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(UserRepositoryInterface $userRepository, BookingRepositoryInterface $bookingRepository) 
    {
        $data = [
            'name'      => $this->name,
            'email'     => $this->email,
            'phone'     => $this->phone,
            'address1'  => $this->address1,
            'address2'  => $this->address2,
            'city'      => $this->city,
            'state'     => $this->state,
            'country'   => $this->country
        ]; 

        $user = $userRepository->store($data);

        if( $user )
        {
            $bookingData = [
                'booking_reference' => time(),
                'paid'              => false,
                'status'            => 'Not yet paid',
                'comments'          => ''
            ];

            $booking = $bookingRepository->createBooking($user, $bookingData);

            /**
             * Attach the selected packages on the bookings table
             */
            $bookingRepository->attachPackages($booking, Booking::content());

            /**
             * Delete the Booked items
             */
            Booking::destroy();

            /**
             * Fire off an email
             */
            event( new UserBookedAPackage($user, $booking->booking_reference) );

        } 

        else 
        
        {
            event( new UserBookingWasNotSuccessful($user) );
            
            /**
             * If payment is unsuccessful, delete the user to avoid duplicating his/her record on the "users" table
             */
            $userRepository->delete($user->id);

        }
    }
}
