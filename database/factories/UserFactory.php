<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Message;
use App\User;
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
        'role' => 'user',
        'name' => $faker->name,
        'surname' =>$faker->name,
        'nick' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'image' => 'https://via.placeholder.com/150',
        // 'email_verified_at' => now(),
        'remember_token' => Str::random(10),
    ];
});
$factory->define(Message::class, function (Faker $faker) {
    do{
        $from = rand(1,30);
        $to = rand(1,30);
        $is_read = rand(0,1);
    }while($from === $to);
    return [
        'from' => $from,
        'to' => $to,
        'message' => $faker->sentence,
        'is_read' => $is_read
    ];
});
