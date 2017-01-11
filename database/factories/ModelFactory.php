<?php

declare(strict_types = 1);

$factory->define(App\Models\Customer::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});
