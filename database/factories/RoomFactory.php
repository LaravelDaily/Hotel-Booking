<?php

$factory->define(App\Room::class, function (Faker\Generator $faker) {
    return [
        "room_number" => $faker->name,
        "floor" => $faker->randomNumber(2),
        "description" => $faker->name,
    ];
});
