<?php

$factory->define(App\Models\Customer::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Models\DocumentType::class, function (Faker\Generator $faker) {
    $name = $faker->colorName;

    return [
        'slug' => str_slug($name),
        'name' => $name,
        'country' => $faker->countryCode,
        'mask' => '999.999.999-99',
    ];
});
