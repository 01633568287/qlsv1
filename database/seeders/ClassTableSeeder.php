<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\ClassModel;
use Faker;
class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create();
        for ($i=0; $i < 100; $i++) { 
            ClassModel::create([
                'name'  =>$faker->name(20),
                'description'=>$faker->text


            ]);
        }
    }
}
