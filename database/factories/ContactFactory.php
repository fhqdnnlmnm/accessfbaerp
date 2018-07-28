<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Contact::class, function (Faker $faker) {
    return [
        //
        'name' => $faker ->name,
        'post' => $faker ->jobTitle,
        'department' => $faker->jobTitle,
        'saltname' =>$faker->title(),
        'telephone' =>$faker->numberBetween($min = 1000, $max = 999999999),
        'email' =>$faker ->email,
        'qq_no' =>$faker->numberBetween($min = 1000, $max = 999999999),
        'address' =>$faker->streetAddress,
        'desc'=>$faker->text,
        'sex'=>$faker->numberBetween($min=0,$max=1),
        'weixin'=>$faker->word,
    ];
});