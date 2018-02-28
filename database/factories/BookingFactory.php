<?php

$factory->define(App\Booking::class, function (Faker\Generator $faker) {
    return [
        "customer_id" => factory('App\Customer')->create(),
        "room_id" => factory('App\Room')->create(),
        "time_from" => $faker->date("d-m-Y H:i:s", $max = 'now'),
        "time_to" => $faker->date("d-m-Y H:i:s", $max = 'now'),
        "additional_information" => $faker->name,
    ];
});
