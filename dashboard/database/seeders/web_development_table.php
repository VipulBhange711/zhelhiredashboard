<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;



class web_development_table extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Faker = Faker::create();

        foreach(range(1,100) as $value){

            DB::table('web_development_table')->insert([
                'Topic_name'=>$Faker->firstNameMale(),
                'Duration_Time'=>$Faker->firstNameMale(),
                'Requirement'=>$Faker->firstNameMale(),
                'Image'=>$Faker->firstNameMale(),
                'Video'=>$Faker->firstNameMale(),
                ] );

        }
    }
}
