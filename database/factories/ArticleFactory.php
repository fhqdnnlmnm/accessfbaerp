<?php

// use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Article::class, function () {
    // var_dump($data);
    $faker=Faker\Factory::create('zh_CN');
    return [
        'title' => $faker->title,
        // 'content' => $faker->paragraph,
        'content'=>$faker->paragraph,
        'user_id'=>function(){
           return factory(App\User::class)->create()->id;
       }
        // 'user_id'=>$data[0]['id'],
    ];
});
