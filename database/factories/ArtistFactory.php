<?php

use Faker\Generator as Faker;

$factory->define(App\Artist::class, function (Faker $faker) {
    $name = [];
    if (rand(0, 7) === 6) {
        $name[] = $faker->citySuffix;
    }

    if (rand(0, 3) === 3) {
        $name[] = $faker->dayOfWeek;
    }

    if (rand(0, 4) === 2) {
        $name[] = $faker->colorName;
    }

    if (count($name) === 0) {
        $r = rand(0, 2);
        if ($r === 0) {
            $name = $faker->city;
        }
        elseif ($r === 1) {
            $name = $faker->word;
        }
        else {
            $gender = rand(0, 1) === 0 ? 'male' : 'female';
            $name = $faker->firstName($gender);
        }
    } else {
        $name = implode(' ', $name);
    }

    return [
        'name' => ucwords($name)
    ];


});
