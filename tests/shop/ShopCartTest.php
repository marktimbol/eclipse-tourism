<?php

use Eclipse\Shop\ShoppingCart;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ShopCartTest extends TestCase
{
	use DatabaseMigrations;

    public function test_it_adds_an_item_on_the_cart()
    {
    	$this->addNewItem();

    	$this->assertEquals(1, ShoppingCart::count());

    	foreach( ShoppingCart::content() as $item )
    	{
    		$this->assertEquals(2, $item->qty);
    		$this->assertEquals(1, $item->options->child_quantity);
    	}
    }

    public function test_it_edits_an_item_on_the_cart()
    {
    	$this->addNewItem();

    	foreach( ShoppingCart::content() as $item )
    	{
	        $updateItem = [
	        	'rowId'	=> $item->rowid,
	            'qty'           => 3,
	            'options'       => [
	                'child_quantity'        => 2
	            ]
	        ];

	    	ShoppingCart::update($item->rowid, [
	    		'options'	=> [
	    			'child_quantity' => 2
	    		]
	    	]);

	    	ShoppingCart::update($item->rowid, 3);

    		$this->assertEquals(2, $item->options->child_quantity);
    		$this->assertEquals(3, $item->qty);
    	}
    }

    public function test_it_removes_an_item_on_the_cart()
    {
    	$this->addNewItem();

    	foreach( ShoppingCart::content() as $item )
    	{
	    	ShoppingCart::remove($item->rowid);
    		$this->assertEquals(0, ShoppingCart::count());
    	}
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

    	return ShoppingCart::add($item);
    }
}
