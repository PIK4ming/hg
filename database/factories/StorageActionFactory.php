<?php
/**
 * Created by PhpStorm.
 * User: Pika
 * Date: 2018/11/9
 * Time: 19:26
 */

use Faker\Generator as Faker;

$factory->define(\App\Models\StorageAction::class, function(Faker $faker){
    return [
        'name' => $faker->monthName
    ];
});