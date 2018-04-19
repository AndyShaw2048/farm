<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'nickname' => $faker->name,
        'password' => bcrypt('secret'), // secret
        'telephone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'last_time' => $faker->time('Y-m-d H:i:s',time()),
        'last_ip' => $faker->ipv4,
        'grade' => $faker->numberBetween(1,8),
        'pid' => $faker->numberBetween(1,56),
        'avatar' => 'users/avatars/default.jpg',
        'address' => '西华师范大学',
        'remember_token' => str_random(10),
    ];
});
