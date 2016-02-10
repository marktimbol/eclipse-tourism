<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PackageTest extends TestCase
{
	use DatabaseMigrations;

	/*
	|--------------------------------------------------------------------------
	| Public page
	|--------------------------------------------------------------------------
	*/

	public function test_view_all_packages_on_the_public_page()
	{
		$package = factory(App\Package::class)->create();

		$this->visit('/packages')
			->see('Packages')
			->see($package->name);
	}

	public function test_show_package_on_the_public_page()
	{
		$package = factory(App\Package::class)->create();
		factory(App\Photo::class)->create([
			'imageable_id'	=> $package->id
		]);

		$this->visit('/package/'.$package->slug)
			->see($package->name)
			->see($package->description)
            ->see($package->adult_price);
	}

	/*
	|--------------------------------------------------------------------------
	| Admin Page
	|--------------------------------------------------------------------------
	*/

    public function test_view_all_packages_on_the_admin_page()
    {
    	$user = factory(App\User::class)->create();
    	$this->actingAs($user);

    	$this->visit('/admin/packages');
    }

    public function test_create_package_on_the_admin_page()
    {
    	$user = factory(App\User::class)->create();
    	$this->actingAs($user);

    	$this->visit('/admin/packages/create');
    }

    public function test_store_package_on_the_admin_page()
    {
    	$user = factory(App\User::class)->create();
    	$this->actingAs($user);

    	$category = factory(App\Category::class)->create();

    	$this->visit('/admin/packages/create')
    		->type('Package Name', 'name')
    		->type('Package Subtitle', 'subtitle')
    		->select($category->id, 'category_id')
    		->type('200', 'adult_price')
    		->type('150', 'child_price')
    		->type('1', 'minimum_quantity')
    		->check('has_ticket_option')
    		->type('Package Description', 'description')
    		->check('has_time_options')
    		->check('confirm_availability')
    		->press('Save Information')

    		->seeInDatabase('packages', [
    			'category_id'	=> $category->id,
    			'name'	=> 'Package Name',
    			'slug' => 'package-name',
    			'subtitle'	=> 'Package Subtitle',
    			'adult_price'	=> "200",
    			'child_price'	=> "150",
    			'minimum_quantity'	=> 1,
    			'has_ticket_option'	=> true,
    			'description'	=> 'Package Description',
    			'has_time_options' => true,
    			'confirm_availability' => true
    		]);
    }

    public function test_edit_package_on_the_admin_page()
    {
    	$user = factory(App\User::class)->create();
    	$this->actingAs($user);

    	$package = factory(App\Package::class)->create();

    	$this->visit('/admin/packages/'.$package->id.'/edit');
    }

    public function test_update_package_on_the_admin_page()
    {
    	$user = factory(App\User::class)->create();
    	$this->actingAs($user);

    	$package = factory(App\Package::class)->create();
    	$category = factory(App\Category::class)->create();

    	$this->visit('/admin/packages/'.$package->id.'/edit')
    		->type('Updated Package Name', 'name')
    		->type('Updated Package Subtitle', 'subtitle')
    		->select($category->id, 'category_id')
    		->type('250', 'adult_price')
    		->type('200', 'child_price')
    		->type('2', 'minimum_quantity')
    		->type('Updated Package Description', 'description')
    		->press('Update Information')

    		->seeInDatabase('packages', [
    			'category_id'	=> $category->id,
    			'name'	=> 'Updated Package Name',
    			'slug' => 'updated-package-name',
    			'subtitle'	=> 'Updated Package Subtitle',
    			'adult_price'	=> "250",
    			'child_price'	=> "200",
    			'minimum_quantity'	=> 2,
    			'has_ticket_option'	=> false,
    			'description'	=> 'Updated Package Description',
    			'has_time_options' => false,
    			'confirm_availability' => false
    		]);
    }
}
