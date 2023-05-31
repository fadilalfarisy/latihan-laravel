<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');
 
        for($x = 1; $x <= 10; $x++){
 
        	DB::table('posts')->insert([
        		'title' => $faker->title,
        		'content' => $faker->text
        	]);
 
        }
    }
}
