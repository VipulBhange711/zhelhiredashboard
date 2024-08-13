<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ContactStudent extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $Faker = Faker::create();
       foreach(range(1,100) as $value){
        DB::table('candidate_data')->insert([
            'First_Name'=>$Faker->firstNameMale(),
            'Last_Name'=>$Faker->lastName (),
            'Email'=>$Faker->email(),
            'Contact'=>$Faker->phoneNumber(),
        ]);
       } 
    }
}
