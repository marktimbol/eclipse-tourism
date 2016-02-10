<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BookingTest extends TestCase
{
	use DatabaseMigrations;

    public function test_view_all_paid_bookings_on_the_admin_page()
    {
    	$user = factory(App\User::class)->create();
    	$this->actingAs($user);

    	$this->visit('/admin/bookings');
    }

    public function test_view_all_upon_requests_bookings_on_the_admin_page()
    {
    	$user = factory(App\User::class)->create();
    	$this->actingAs($user);

    	$this->visit('/admin/bookings/upon-requests');
    }
}
