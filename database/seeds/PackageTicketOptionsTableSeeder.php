<?php

use App\Ticket;
use Illuminate\Database\Seeder;

class PackageTicketOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ticketOptions = [
        	[
        		'package_id'	=> 46,
        		'name'			=> 'Bronze',
        		'adultPrice'	=> '250',
        		'childPrice'	=> '205'
        	],

        	[
        		'package_id'	=> 46,
        		'name'			=> 'Silver',
        		'adultPrice'	=> '350',
        		'childPrice'	=> '305'
        	],

        	[
        		'package_id'	=> 46,
        		'name'			=> 'Gold',
        		'adultPrice'	=> '500',
        		'childPrice'	=> '415'
        	],
    	];

         foreach( $ticketOptions as $ticket )
         {
            $newOption = new Ticket;

            $newOption->package_id 	= 	$ticket['package_id'];
            $newOption->name 		= 	$ticket['name'];
            $newOption->adultPrice 	= 	$ticket['adultPrice'];
            $newOption->childPrice 	= 	$ticket['childPrice'];

            $newOption->save();
         }
    }
}
