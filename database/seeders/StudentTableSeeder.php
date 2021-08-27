<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\StudentModel;
use Faker;
class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =Faker\Factory::create();
        for ($i=0; $i < 100; $i++) { 
            StudentModel::create([
                'fullname'=>$faker->name(30),
                'DOB'     =>$faker->date($format="Y-m-d",$max='now'),
                'sex'     =>$faker->boolean,
                'address' =>$faker->address,
                'class_id'=>random_int(1, 100),
                'description'=>$faker->text

            ]);
        }
    }
}
