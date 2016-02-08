<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('marktimbol'),
        'phone'	=> $faker->phoneNumber,
        'address1' => $faker->streetAddress,
        'address2' => $faker->streetName,
        'city'	=> $faker->city,
        'state'	=> $faker->state,
        'country'	=> $faker->country,
        'type'	=> 'type',
        'cardName'	=> '',
        'cardBrand' => '',
        'cardLastFour' => '',
        'cardExpiryMonth' => '',
        'cardExpiryYear' => '',

        'remember_token' => str_random(10)
    ];
});

$factory->define(App\Package::class, function(Faker\Generator $faker) {

	return [
		'user_id'	=> factory(App\User::class)->create()->id,
		'name'	=> $faker->sentence(2),
		'slug'	=> $faker->slug,
		'description'	=> $faker->paragraph(5),
		'adult_price'	=> $faker->randomNumber(3),
		'child_price'	=> $faker->randomNumber(2)
	];
	
});

$factory->define(App\Photo::class, function(Faker\Generator $faker) {

	return [
		'path'	=> $faker->imageUrl(800,600),
		'imageable_id'	=> factory(App\Package::class)->make()->id,
		'imageable_type'	=> 'App\Package'
	];

});