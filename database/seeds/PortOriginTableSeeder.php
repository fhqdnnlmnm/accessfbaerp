<?php

use Illuminate\Database\Seeder;
use App\Model\Business\OriginPort;

class PortOriginTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        OriginPort::truncate();

        $faker=\Faker\Factory::create();

        
        for($i = 0; $i < 10; $i++){
            OriginPort::create([
                'country'=>$faker->country,
                'province' => $faker -> state,
                'city' => $faker -> city,
                'port' => $faker -> realText($maxNbChars = 10, $indexSize = 2),
                'wareaddress' => $faker -> address,
                'type' => $faker -> name
            ]);
        };

        for($i = 0; $i < 10; $i++){
            OriginPort::create([
                'country'=>$faker->country,
                'province' => $faker -> state,
                'city' => $faker -> city,
                'port' => $faker -> realText($maxNbChars = 10, $indexSize = 2),
                'wareaddress' => $faker -> address,
                'type' => $faker -> name
            ]);
        };
    }
}
