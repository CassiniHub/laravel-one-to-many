<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'firstname' => $faker -> word(),
        'lastname' => $faker -> word(),
        'ral' => $faker -> numberBetween(24000, 87000)
    ];
});
