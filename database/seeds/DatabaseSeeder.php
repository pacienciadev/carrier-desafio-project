<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,30) as $index){
            DB::table('funcionarios')->insert([
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'age' => $faker->numberBetween(18,99),
                'gender' => $faker->randomElement($array = array ('M','F')),
                'created_at' => $faker->dateTime($max = 'now'),
                'updated_at' => $faker->dateTime($max = 'now'),
            ]);
        }
    }
}
