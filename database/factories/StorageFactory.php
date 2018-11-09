<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Storage::class, function (Faker $faker) {
    $product = factory(\App\Models\Product::class)->create();
    return [
        'product_name' => $product->name,
        'product_id' =>  $product->id,
        'quantity' => $faker->randomNumber(4),
        'cost' => $faker->randomFloat(2, 0, 5),
        'increase' => rand(0, 1),
        'action_type' => rand(1, 5),
        'batch_number' => date('Ymdhis')
    ];
});

$factory->state(App\Models\Storage::class, 'formProduct', function (Faker $faker) {
    return [
        'quantity' => $faker->randomNumber(3),
        'cost' => $faker->randomFloat(20.0),
        'increase' => rand(0, 1),
        'action_type' => rand(1, 5),
        'batch_number' => date('Ymdhis')
    ];
});
