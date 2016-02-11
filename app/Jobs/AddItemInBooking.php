<?php

namespace App\Jobs;

use App\Jobs\Job;
use Eclipse\Repositories\Package\PackageRepositoryInterface;
use Eclipse\Shop\Booking;
use Illuminate\Contracts\Bus\SelfHandling;

class AddItemInBooking extends Job
{
    public $package_id;
    public $quantity;
    public $child_quantity;
    public $date;
    public $date_submit;

    public function __construct($package_id, $quantity, $child_quantity, $date, $date_submit = '')
    {
        $this->package_id = $package_id;
        $this->quantity = $quantity;
        $this->child_quantity = $child_quantity;
        $this->date = $date;
        $this->date_submit = $date_submit;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(PackageRepositoryInterface $package)
    {
        $selectedPackage = $package->find($this->package_id);
            
        $item = [
            'id'            => $selectedPackage->id,
            'name'          => $selectedPackage->name,
            'qty'           => (int) $this->quantity,               //adult_quantity
            'price'         => $selectedPackage->adult_price,       //adult_price
            'options'       => [
                'child_quantity'        => $this->child_quantity,
                'date'                  => $this->date,
                'date_submit'           => $this->date_submit,          
                'selectedPackage'       => $selectedPackage
            ]
        ];
        
        Booking::add($item);

        return $item;
    }
}
