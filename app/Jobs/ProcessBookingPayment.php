<?php

namespace App\Jobs;

use App\Events\UserPaidTheBooking;
use App\Events\UserPurchaseWasNotSuccessful;
use App\Jobs\Job;
use Eclipse\Billings\BillingGateway;
use Eclipse\Repositories\Booking\BookingRepositoryInterface;
use Eclipse\Repositories\User\UserRepositoryInterface;
use Illuminate\Contracts\Bus\SelfHandling;

class ProcessBookingPayment extends Job implements SelfHandling
{
    protected $user_id;

    protected $booking_reference;

    protected $token;

    protected $cardName;

    protected $cardBrand;

    protected $cardLastFour;

    protected $cardExpiryMonth;

    protected $cardExpiryYear;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user_id, $booking_reference, $token, $cardName, $cardBrand, $cardLastFour, $cardExpiryMonth, $cardExpiryYear)
    {
        $this->user_id = $user_id;
        $this->booking_reference = $booking_reference;
        $this->token = $token;
        $this->cardName = $cardName;
        $this->cardBrand = $cardBrand;
        $this->cardLastFour = $cardLastFour;
        $this->cardExpiryMonth = $cardExpiryMonth;
        $this->cardExpiryYear = $cardExpiryYear;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(
        UserRepositoryInterface $userRepo, 
        BookingRepositoryInterface $bookingRepo,
        BillingGateway $gateway
    )
    {
        $user = $userRepo->find($this->user_id);

        $user->cardName = $this->cardName;
        $user->cardBrand = $this->cardBrand;
        $user->cardLastFour = $this->cardLastFour;
        $user->cardExpiryMonth = $this->cardExpiryMonth;
        $user->cardExpiryYear = $this->cardExpiryYear;

        $user->save();

        $booking = $bookingRepo->findByReference($this->booking_reference);

        $bookedPackages = $booking->packages;

        $total = calculateTotalAmount($bookedPackages);

        $chargeWasSuccessful = $gateway->charge($user, $total, $this->token);

        if( $chargeWasSuccessful )
        {
            $bookingRepo->update($booking->id, ['status' => 1]);

            event( new UserPaidTheBooking($user, $this->booking_reference) );
        } 
        else 
        {
            event( new UserPurchaseWasNotSuccessful($user) );

            /**
             * If payment is not successful, delete the user to avoid duplicating his/her
             * record on the "users" table
             */
            //$userRepository->delete($user->id);

        }

    }
}
