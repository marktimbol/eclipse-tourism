<?php

namespace App\Jobs;

use App\Events\UserPurchaseWasNotSuccessful;
use App\Events\UserPurchasedAPackage;
use App\Jobs\Job;
use Eclipse\Billings\BillingGateway;
use Eclipse\Repositories\User\UserRepositoryInterface;
use Eclipse\Shop\ShoppingCart;
use Illuminate\Contracts\Bus\SelfHandling;
use Stripe\Error\Card;

class ProcessCartOrder extends Job implements SelfHandling
{
    protected $name;

    protected $email;

    protected $phone;

    protected $address1;

    protected $address2;

    protected $city;

    protected $state;

    protected $country;

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
    public function __construct($name, $email, $phone, $address1, $address2, $city, $state, $country, $token, $cardName, $cardBrand, $cardLastFour, $cardExpiryMonth, $cardExpiryYear)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
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
    public function handle( UserRepositoryInterface $userRepo, BillingGateway $gateway, ShoppingCart $cart ) 
    {
        $data = [
            'name'      => $this->name,
            'email'     => $this->email,
            'phone'     => $this->phone,
            'address1'  => $this->address1,
            'address2'  => $this->address2,
            'city'      => $this->city,
            'state'     => $this->state,
            'country'   => $this->country,
            'cardName'          => $this->cardName,
            'cardBrand'         => $this->cardBrand,
            'cardLastFour'      => $this->cardLastFour,
            'cardExpiryMonth'   => $this->cardExpiryMonth,
            'cardExpiryYear'    => $this->cardExpiryYear    
        ]; 
        
        $user = $userRepo->store($data);        

        $transaction = $gateway->charge($user, $cart->total(), $this->token);

        if( ! $transaction )
        {
            event( new UserPurchaseWasNotSuccessful($user) );
            /**
             * If payment is not successful, delete the user to avoid duplicating his/her
             * record on the "users" table
             */
            $userRepo->delete($user->id);

            flash()->error( companyName(), 'Your card was declined.');

            return redirect()->back();
        }

        /**
         * Save the data to "bookings" table
         */
        $booking = $user->bookings()->create([
            'booking_reference' => bookingReference($transaction),
            'paid'              => $transaction->paid,
            'status'            => $transaction->status,
            'comments'          => ''
        ]); 

        foreach( $cart->content() as $item )
        {
            $packageId = $item->options->selectedPackage->id;
            $adult_quantity = $item->qty;
            $child_quantity = $item->options->child_quantity;

            /**
             * Save the data to "booking_details" table
             */
            $booking->packages()->attach($packageId, [
                'adult_quantity'    => $adult_quantity,
                'child_quantity'    => $child_quantity,
                'date'              => $item->options->date,   //Day, Month Year
                'date_submit'       => $item->options->date_submit, //YYYY-MM-DD
                'time'              => $item->options->time,
                'ticket'            => $item->options->ticket             
                ]);       
        }

        $cart->destroy();

        event( new UserPurchasedAPackage($user, $booking->booking_reference) );

    }
}
