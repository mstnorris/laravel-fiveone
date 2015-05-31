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

$factory->define('FiveOne\User', function ($faker) {
    return [
        'string_id' => strtoupper(str_random(6)),
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'active' => $faker->boolean(65),
        'remember_token' => str_random(10),
    ];
});

$factory->define('FiveOne\Job', function ($faker) {
    return [
        'string_id' => str_random(5),
        'name' => $faker->name,
        'address' => $faker->streetAddress
    ];
});
