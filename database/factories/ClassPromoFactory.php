<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ClassPromo;
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

$factory->define(ClassPromo::class, function (Faker $faker) {
    return [
        'pack_id' => '20c59fd5-d327-4540-bee4-6a2f0ca4d3ee',
        'promo_code' => 'THINGYAN77',
        'discount' => 10, 
    ];
});
