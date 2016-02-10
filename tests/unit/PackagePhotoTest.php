<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PackagePhotoTest extends TestCase
{
	use DatabaseMigrations;

    public function test_verifies_that_the_uploaded_photo_filename_was_saved_on_the_database()
    {
    	// $user = factory(App\User::class)->create();
    	// $this->actingAs($user);

    	// $package = factory(App\Package::class)->create();

    	// $this->call('POST', '/packages/photos/upload', [
    	// 		'package_id' => $package->id,
    	// 		'photo' => 'uploaded.jpg'
    	// 	]);

    	// $this->seeInDatabase('photos', [
    	// 	'imageable_id' => $package->id,
    	// 	'imageable_type' => 'App\Package'
    	// 	]);

    }
}
