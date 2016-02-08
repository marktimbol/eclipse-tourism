<?php

use App\Deal;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class DealsTest extends TestCase
{
	use DatabaseMigrations;

    public function test_view_all_promos_on_the_public_page()
    {
        $package = factory(App\Package::class)->create();
        $promo = factory(App\Deal::class)->create();

        $result = Deal::with('package')->whereId($promo->id)->get();

        $this->visit('/deals')
            ->see('Deals')
            ->see($result[0]->package->name);
    }

    public function test_view_a_specific_promo_on_the_public_page()
    {
        $promo = factory(App\Deal::class)->create();
        $package = factory(App\Package::class)->create();

        $this->visit('/deals/'.$promo->id.'/package/'.$package->slug)
            ->see($package->name);

    }

    public function test_view_all_promos_on_the_admin_page()
    {
    	$promo = factory(App\Deal::class)->create();

        $this->visit('/admin/deals')
        	->see('Deals')
        	->see($promo->package_id)
        	->see($promo->adultPrice)
        	->see($promo->childPrice);
    }

    public function test_view_add_new_deals_page()
    {
    	$this->visit('/admin/deals/create')
    		->see('New Promo');
    }

    public function test_store_promo_to_a_selected_package()
    {    	
    	$package = factory(App\Package::class)->create();

		$this->visit('/admin/deals/create')
			->see('New Promo')
			->select($package->id, 'package_id')
			->type('295', 'adultPrice')
			->type('250', 'childPrice')
			->type('New promo description', 'description')
			->press('Save Information')
			->seeInDatabase('deals', [
	    		'package_id'	=> $package->id,
	    		'adultPrice'	=> 295,
	    		'childPrice'	=> 250,
	    		'description'	=> 'New promo description'
			]);
    }

    public function test_edit_deals_page()
    {
    	$promo = factory(App\Deal::class)->create();

    	$this->visit('/admin/deals/'.$promo->id.'/edit')
    		->see('Edit Promo');
    }

    public function test_update_deals_information()
    {
    	$promo = factory(App\Deal::class)->create();
    	$package = factory(App\Package::class)->create();

		$this->visit('/admin/deals/'.$promo->id.'/edit')
			->see('Edit Promo')
			->select($package->id, 'package_id')
			->type("200", 'adultPrice')
			->type("100", 'childPrice')
			->type("Updated promo", 'description')
			->press('Update Information')
			->seeInDatabase('deals', [
	    		'package_id'	=> $package->id,
	    		'adultPrice'	=> 200,
	    		'childPrice'	=> 100,
	    		'description'	=> "Updated promo"
			]);
    }	

    public function test_view_a_specific_promo()
    {
    	$promo = factory(App\Deal::class)->create();

    	$this->visit('/admin/deals/'.$promo->id)
    		->See('Promo Details');
    }


    public function test_delete_a_specific_promo()
    {
    	$promo = factory(App\Deal::class)->create();

    	$this->visit('/admin/deals/'.$promo->id)
    		->See('Promo Details')
    		->press('Delete')
    		->dontSeeInDatabase('deals', ['id' => $promo->id]);
    }
}
