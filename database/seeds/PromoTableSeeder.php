<?php

use App\Deal;
use App\Photo;
use Illuminate\Database\Seeder;

class PromoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deals = [
        	[
        		'name'	=> 'Desert Safari with Dinner',
        		'slug'	=> 'desert-safari-with-dinner',
        		'description'	=> '<p>The price for desert safari is 295 per person. We currently have a buy one get one free promotion if you have one of our promotional vouchers in the entertainer or gulf news.</p>
        			<h3>Our Desert Safari with Dinner includes</h3>
        			<ul>
        				<li>Pickup from your hotel or residence in Dubai or Sharjah</li>
        				<li>Dune Bashing (Adventurous Desert Drive)</li>
        				<li>Henna Painting</li>
        				<li>Arabic Dress Photograph opportunity</li>
        				<li>Camel Ride</li>
        				<li>Sand Boarding (Optional - upon availability)</li>
        				<li>Quad Biking (Optional - upon availability with extra charge)</li>
        				<li>BBQ Dinner (Vegetarian option available)</li>
        				<li>Soft drinks, Mineral Water, Tea & Coffee (Unlimited)</li>
        				<li>Sheesha / Hubbllee Bubblee smoking facility</li>
        				<li>Belly Dance show</li>
        				<li>Tanoura Dance Show</li>
        				<li>Alcohol available at camp - at extracost</li>
        				<li>Return back to your hotel or residence</li>
        			</ul>
        		',
        		'photos'	=> [
        			[
        				'path'	 => 'Desert-Safari-with-Dinner.jpg',
        			]
        		]
        	]
        ];

        foreach( $deals as $item )
        {
        	$promo = new Deal;
        	$promo->name = $item['name'];
        	$promo->slug = $item['slug'];
        	$promo->description = $item['description'];

        	$promo->save();

        	foreach( $item['photos'] as $photo )
        	{
                $newPhoto = new Photo([
                    'path'  => $photo['path']
                ]);
        		$promo->photos()->save($newPhoto);
        	}
        }
    }
}
