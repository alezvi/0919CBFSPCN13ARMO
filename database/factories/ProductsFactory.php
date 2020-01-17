<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->text(100),
        'description' => $faker->paragraph,
        'price' => $faker->randomFloat(2, 999, 999999),
        'stock' => $faker->numberBetween(0, 100),
    ];
});
