<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PackageInformationTest extends TestCase
{
	use DatabaseMigrations;

    public function test_it_adds_a_package_information()
    {
        $package = factory(App\Package::class)->create();
        $user = factory(App\User::class)->create();
        $this->actingAs($user);

        $url = '/admin/packages/'.$package->id.'/information';

        $this->call('POST', $url, [
        	'package_id' => $package->id, 
        	'title' => 'Title', 
        	'description' => 'Description'
        ]);

        $this->seeInDatabase('package_information', [
        	'package_id' => $package->id,
        	'title' => 'Title',
        	'description' => 'Description'
        ]);

    }

    public function test_it_updates_a_package_information()
    {
    	$package = factory(App\Package::class)->create();
        $setupInformation = factory(App\PackageInformation::class)->make();

        $information = $package->information()->save($setupInformation);

        $user = factory(App\User::class)->create();
        $this->actingAs($user);

        $url = '/admin/packages/';
        $url .= $package->id;
        $url .= '/information' . '/';
        $url .= $information->id;

        $this->call('PUT', $url, [
        	'id'			=> $information->id,
        	'package_id'	=> $package->id,
        	'title' 		=> 'Updated Title', 
        	'description' 	=> 'Updated Description'
        ]);

        $this->assertResponseOk();

        $this->seeInDatabase('package_information', [
        	'id'			=> $information->id,
        	'package_id' 	=> $package->id,
        	'title' 		=> 'Updated Title',
        	'description' 	=> 'Updated Description'
        ]);
    }

    public function test_it_delete_a_package_information()
    {
    	$package = factory(App\Package::class)->create();
        $setupInformation = factory(App\PackageInformation::class)->make();

        $information = $package->information()->save($setupInformation);

        $user = factory(App\User::class)->create();
        $this->actingAs($user);

        $url = '/admin/packages/';
        $url .= $package->id;
        $url .= '/information' . '/';
        $url .= $information->id;

        $this->call('DELETE', $url, [
        	'id'			=> $information->id,
        	'package_id'	=> $package->id
        ]);

        $this->dontSeeInDatabase('package_information', [
        	'id'	=> $information->id,
        	'package_id'	=> $package->id
        	]);
    }
}
