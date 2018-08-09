<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Customer\Customer::class, function (Faker $faker) {
    return [
        //
        'contact_id'=>$faker->randomDigitNotNull,
        'name' => $faker->unique()->name,
        'code' => $faker->unique()->word,
        'account_period'  => $faker->numberBetween($min=0,$max=1),
        'pay_type'  => $faker->numberBetween($min=0,$max=1),
        'address' => $faker -> address,
        'origin' => $faker ->randomElement($array=array('电话营销','网络营销')),
        'industry' => $faker ->randomElement($array=array('房地产','工厂')),
        'annual_revenue' =>$faker ->randomElement($array=array('1-10万','10-20万','20-50万')),
    ];
});