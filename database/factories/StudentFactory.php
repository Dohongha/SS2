<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'phonenumber'=> $faker->phoneNumber,
        'address'=> $faker->address,
        'course_id'=> factory('App\Course')->create()->id
    ];
});
