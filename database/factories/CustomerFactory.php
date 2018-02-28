<?php

$factory->define(App\Customer::class, function (Faker\Generator $faker) {
    return [
        "first_name" => $faker->name,
        "last_name" => $faker->name,
        "address" => $faker->name,
        "phone" => $faker->name,
        "email" => $faker->safeEmail,
        "country_id" => factory('App\Country')->create(),
    ];
});
