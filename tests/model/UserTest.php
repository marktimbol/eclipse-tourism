<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
	use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_user_can_book_a_package()
    {
    	// $user = factory(App\User::class)->create([]);
        
    	// $package = factory(App\Package::class)->create([]);

    	// $user->book($package);

    	// $this->seeInDatabase('bookings', ['user_id' => $user->id, 'package_id' => $package->id ]);
    }
}
