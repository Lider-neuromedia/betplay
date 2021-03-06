<?php

use App\User;
use App\Client;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'document' => $faker->numberBetween($min = 31148080, $max = 1119999199),
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'address' => str_replace(array("\r\n", "\r", "\n"), " ", $faker->streetAddress),
        'of_legal_age' => true,
        'accept_terms_and_conditions' => true,
        'has_betplay_account' => $faker->boolean,
    ];
});