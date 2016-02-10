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

$factory->define(App\Category::class, function(Faker\Generator $faker) {
    return [
        'name'  => $faker->sentence(2),
        'slug'  => $faker->slug
    ];
});

$factory->define(App\Package::class, function(Faker\Generator $faker) {
	return [
		'category_id'	=> factory(App\Category::class)->create()->id,
		'name'	=> $faker->sentence(2),
		'slug'	=> $faker->slug,
        'subtitle' => $faker->sentence(2),
		'description'	=> $faker->paragraph(5),
		'adult_price'	=> $faker->randomNumber(3),
		'child_price'	=> $faker->randomNumber(2),
        'has_time_options' => false,
        'confirm_availability' => false,
        'minimum_quantity'  => 1,
        'has_ticket_option' => false
	];
});

$factory->define(App\PackageInformation::class, function(Faker\Generator $faker) {
    return [
        'package_id'  => factory(App\Package::class)->create()->id,
        'title'  => $faker->sentence,
        'description' => $faker->paragraph
    ];
});

$factory->define(App\Ticket::class, function(Faker\Generator $faker) {
    return [
        'package_id'  => factory(App\Package::class)->create()->id,
        'name'  => $faker->sentence,
        'adultPrice' => $faker->randomNumber(3),
        'childPrice'    => $faker->randomNumber(2)
    ];
});

$factory->define(App\Deal::class, function(Faker\Generator $faker) {
    return [
        'name'  => $faker->sentence(2),
        'slug'  => $faker->slug,
        'description' => $faker->paragraph(5)
    ];
});

$factory->define(App\Photo::class, function(Faker\Generator $faker) {
	return [
		'path'	=> $faker->imageUrl(800,600),
		'imageable_id'	=> factory(App\Package::class)->make()->id,
		'imageable_type'	=> 'App\Package'
	];
});