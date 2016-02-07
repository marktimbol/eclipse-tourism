<?php

namespace App\Jobs;

use App\Events\ItemWasAddedOnTheCart;
use App\Jobs\Job;
use App\Ticket;
use Eclipse\Repositories\Package\PackageRepositoryInterface;
use Eclipse\Shop\ShoppingCart;
use Illuminate\Contracts\Bus\SelfHandling;

class AddItemInCart extends Job
{
    public $package_id;
    public $quantity;
    public $child_quantity;
    public $date;
    public $date_submit;
    public $time;
    public $ticket;

    public function __construct($package_id, $quantity, $child_quantity, $date, $date_submit = '', $time = '', $ticket='')
    {
        $this->package_id = $package_id;
        $this->quantity = $quantity;
        $this->child_quantity = $child_quantity;
        $this->date = $date;
        $this->date_submit = $date_submit;
        $this->time = $time;
        $this->ticket = $ticket;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(PackageRepositoryInterface $package, ShoppingCart $cart)
    {
        $selectedPackage = $package->find($this->package_id);
        $adultPrice = $selectedPackage->adult_price;
        $ticketId = $this->ticket;

        if( $selectedPackage->has_ticket_option )
        {
            $ticket = Ticket::findOrFail($this->ticket);
            $adultPrice = $ticket->adultPrice;
            $ticketId = $ticket->id;
        }

        $data = [
            'id'            => $selectedPackage->id,
            'name'          => $selectedPackage->name,
            'qty'           => (int) $this->quantity,               //adult_quantity
            'price'         => $adultPrice,                         //adult_price
            'options'       => [
                'child_quantity'        => $this->child_quantity,
                'date'                  => $this->date,
                'date_submit'           => $this->date_submit,
                'time'                  => $this->time,
                'ticket'                => $ticketId,
                'selectedPackage'       => $selectedPackage 
            ]
        ];

        $cart->add($data);

        event(new ItemWasAddedOnTheCart($data) );
        
        return $data;
    }
}
