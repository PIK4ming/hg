<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->colorName,
        'average_price' => $faker->randomFloat(2, 0, 30),
        'cost' => $faker->randomFloat(2, 0, 20),
        'image' => $faker->imageUrl()
    ];
});
