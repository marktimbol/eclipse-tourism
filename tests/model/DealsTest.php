<?php

use App\Deal;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class DealsTest extends TestCase
{
	use DatabaseMigrations;

    /*
    |--------------------------------------------------------------------------
    | Public page
    |--------------------------------------------------------------------------
    */
    public function test_view_all_promos_on_the_public_page()
    {
        $promo = factory(App\Deal::class)->create();
        $this->visit('/deals')
            ->see($promo->name);
    }

    public function test_view_a_specific_promo_on_the_public_page()
    {
        $promo = factory(App\Deal::class)->create();
        $this->visit('/deals/'.$promo->slug)
            ->see($promo->name);
    }

    /*
    |--------------------------------------------------------------------------
    | Admin page
    |--------------------------------------------------------------------------
    */
    public function test_view_all_promos_on_the_admin_page()
    {
    	$promo = factory(App\Deal::class)->create();
        $user = factory(App\User::class)->create();
        $this->actingAs($user);
        
        $this->visit('/admin/deals')
        	->see($promo->name);
    }

    public function test_view_add_new_promo_page()
    {
        $user = factory(App\User::class)->create();
        $this->actingAs($user);

    	$this->visit('/admin/deals/create')
    		->see('New Promo');
    }

    public function test_store_a_new_promo()
    {    	
        $user = factory(App\User::class)->create();
        $this->actingAs($user);

		$this->visit('/admin/deals/create')
			->see('New Promo')
            ->type('Promo name', 'name')
			->type('New promo description', 'description')
			->press('Save Information')
			->seeInDatabase('deals', [
	    		'name'	=> 'Promo name',
                'slug'  => 'promo-name',
	    		'description'	=> 'New promo description'
			]);
    }

    public function test_view_edit_promo_page()
    {
        $user = factory(App\User::class)->create();
        $this->actingAs($user);

    	$promo = factory(App\Deal::class)->create();
    	$this->visit('/admin/deals/'.$promo->id.'/edit')
    		->see('Edit Promo');
    }

    public function test_update_promo_information()
    {
        $user = factory(App\User::class)->create();
        $this->actingAs($user);

    	$promo = factory(App\Deal::class)->create();
		$this->visit('/admin/deals/'.$promo->id.'/edit')
			->see('Edit Promo')
			->type("Updated Promo name", 'name')
            ->type("Updated Promo description", 'description')
			->press('Update Information')
			->seeInDatabase('deals', [
                'name'          => 'Updated Promo name',
                'slug'          => 'updated-promo-name',
	    		'description'	=> "Updated Promo description"
			]);
    }	

    public function test_view_a_specific_promo()
    {
        $user = factory(App\User::class)->create();
        $this->actingAs($user);

    	$promo = factory(App\Deal::class)->create();
    	$this->visit('/admin/deals/'.$promo->id)
            ->see($promo->name)
            ->see($promo->description);
    }

    public function test_delete_a_specific_promo()
    {
        $user = factory(App\User::class)->create();
        $this->actingAs($user);

    	$promo = factory(App\Deal::class)->create();
    	$this->visit('/admin/deals/'.$promo->id)
    		->See('Promo Details')
    		->press('Delete')
    		->dontSeeInDatabase('deals', ['id' => $promo->id]);
    }
}
