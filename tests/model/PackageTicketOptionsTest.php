<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PackageTicketOptionsTest extends TestCase
{
	use DatabaseMigrations;

    public function test_it_adds_a_ticket_option()
    {
        $package = factory(App\Package::class)->create(['has_ticket_option' => true]);
        $user = factory(App\User::class)->create();
        $this->actingAs($user);

        $url = '/admin/packages/'.$package->id.'/tickets';

        $this->call('POST', $url, [
        	'package_id' => $package->id, 
        	'name' => 'Ticket Name',
            'adultPrice'    => 200,
            'childPrice'    => 150
        ]);

        $this->seeInDatabase('tickets', [
        	'package_id' => $package->id,
        	'name' => 'Ticket Name',
            'adultPrice'    => 200,
            'childPrice'    => 150
        ]);

    }

    public function test_it_updates_a_package_information()
    {
    	$package = factory(App\Package::class)->create(['has_ticket_option' => true]);
        $setupTicket = factory(App\Ticket::class)->make();

        $ticket = $package->tickets()->save($setupTicket);

        $user = factory(App\User::class)->create();
        $this->actingAs($user);

        $url = '/admin/packages/';
        $url .= $package->id;
        $url .= '/tickets' . '/';
        $url .= $ticket->id;

        $this->call('PUT', $url, [
        	'id'			=> $ticket->id,
        	'package_id'	=> $package->id,
            'name' => 'Updated Ticket Name',
            'adultPrice'    => 250,
            'childPrice'    => 200
        ]);

        $this->assertResponseOk();

        $this->seeInDatabase('tickets', [
        	'id'			=> $ticket->id,
        	'package_id' 	=> $package->id,
            'name' => 'Updated Ticket Name',
            'adultPrice'    => 250,
            'childPrice'    => 200
        ]);
    }

    public function test_it_delete_a_package_information()
    {
    	$package = factory(App\Package::class)->create();
        $setupTicket = factory(App\Ticket::class)->make();

        $ticket = $package->tickets()->save($setupTicket);

        $user = factory(App\User::class)->create();
        $this->actingAs($user);

        $url = '/admin/packages/';
        $url .= $package->id;
        $url .= '/tickets' . '/';
        $url .= $ticket->id;

        $this->call('DELETE', $url, [
        	'id'			=> $ticket->id,
        	'package_id'	=> $package->id
        ]);

        $this->dontSeeInDatabase('tickets', [
        	'id'	=> $ticket->id,
        	'package_id'	=> $package->id
        	]);
    }
}
