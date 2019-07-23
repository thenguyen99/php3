<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
    	if (DB::table('students')->count() == 0) {
    		DB::table('students')->insert([
    			[
    				'id' =>1,
    				'name'=> 'PT13312',
    				'address'=>'Ha noi',
    				'university'=>'FPT',
    				'class_id'=>'1'
    				

    			],
    			[
    				'id' =>2,
    				'name'=> 'PT1331222',
    				'address'=>'Ha noi',
    				'university'=>'FPT',
    				'class_id'=>'1'
    				

    			],
    			[
    				'id' =>3,
    				'name'=> 'PT13314',
    				'address'=>'Ha noi',
    				'university'=>'FPT',
    				'class_id'=>'3'
    				

    			]
    		])
    	}
}
