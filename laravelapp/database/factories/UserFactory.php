<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(App\Preson::class,
 function (Faker $faker) {
    return [
        'name' => $faker->name,
        'mail' => $faker->safeEmail,
        'age' => random_int(1,99),
    ];
});

$factory->define(App\Book::class,
 function (Faker $faker) {
    return [
        'name' => $faker->name,
        'barcode' => $faker->barcode,
        'number' => $faker->random_int(100000,10000000),
        'price' => random_int(1,99),
    ];
});
