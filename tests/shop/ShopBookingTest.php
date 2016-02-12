<?php

use App\Jobs\ProcessBookingOrder;
use Eclipse\Shop\Booking;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ShopBookingTest extends TestCase
{
	use DatabaseMigrations;

    public function test_it_adds_an_item_on_the_booking()
    {
    	$this->addNewItem();

    	$this->assertEquals(1, Booking::count());

    	foreach( Booking::content() as $item )
    	{
    		$this->assertEquals(2, $item->qty);
    		$this->assertEquals(1, $item->options->child_quantity);
    	}
    }

    public function test_it_edits_an_item_on_the_booking()
    {
    	$this->addNewItem();

    	foreach( Booking::content() as $item )
    	{
	        $updateItem = [
	        	'rowId'	=> $item->rowid,
	            'qty'           => 3,
	            'options'       => [
	                'child_quantity'   => 2
	            ]
	        ];

	    	Booking::update($item->rowid, [
	    		'options'	=> [
	    			'child_quantity' => 2
	    		]
	    	]);

	    	Booking::update($item->rowid, 3);

    		$this->assertEquals(2, $item->options->child_quantity);
    		$this->assertEquals(3, $item->qty);
    	}
    }

    public function test_it_removes_an_item_on_the_booking()
    {
    	$this->addNewItem();

    	foreach( Booking::content() as $item )
    	{
	    	Booking::remove($item->rowid);
    		$this->assertEquals(0, Booking::count());
    	}
    }

    public function test_it_saves_the_booked_items_on_the_database()
    {
        $this->addNewItem();

        
    }


    public function test_booking_checkout()
    {
        $this->expectsJobs(ProcessBookingOrder::class);

        $this->addNewItem();

        $data = [
            'name'  => 'Mark Timbol',
            'email' => 'mark.timbol@hotmail.com',
            'password'  => bcrypt('marktimbol'),
            'phone' => '+971 56 375 9865',
            'address1' => 'Address 1',
            'address2' => 'Address 2',
            'city'  => 'City',
            'state' => 'State',
            'country'   => 'Country'
        ];

        $this->call('POST', '/booking/checkout', $data);

        $this->seePageIs('/booking/checkout');
    
        // (new ProcessBookingOrder($data))->handle();

        // $this->seeInDatabase('users', [
        //     'name'  => 'Mark Timbol',
        //     'email' => 'mark.timbol@hotmail.com'
        // ]);


    }

    private function addNewItem()
    {
        $package = factory(App\Package::class)->create();

        $item = [
            'id'            => $package->id,
            'name'          => $package->name,
            'qty'           => 2,
            'price'         => $package->adult_price,
            'options'       => [
                'child_quantity'        => 1,
                'date' => 'February 11, 2016',
                'date_submit' => '',   
                'selectedPackage'       => $package
            ]
        ];

        return Booking::add($item);
    }
}
