<?php

use Illuminate\Database\Seeder;
use App\Model\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Customer::truncate();

        factory(App\Model\Customer::class,50)->create()->each(function($u){
            $u->contacts()->save(factory(App\Model\Contact::class)->make());
        });

        // $faker=\Faker\Factory::create('zh_CN');


        // for($i = 0; $i < 10; $i++){
        //     Customer::create([
        //         'country'=>$faker->country,
        //         'province' => $faker -> state,
        //         'city' => $faker -> city,
        //         'port' => $faker -> realText($maxNbChars = 10, $indexSize = 2),
        //         'wareaddress' => $faker -> address,
        //         'type' => $faker -> name
        //     ]);
        // };
    }
}


 