<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	if (DB::table('classes')->count() == 0) {
    		DB::table('classes')->insert([
    			[
    				'id' =>1,
    				'name'=> 'PT13312',
    				'teacher_name'=>'NV A',
    				'major'=> 'CNTT',
    				'max_student'=>50

    			],
    			[
    				'id' =>2,
    				'name'=> 'PT1331222',
    				'teacher_name'=>'NV b',
    				'major'=> 'MKT',
    				'max_student'=>20

    			],
    			[
    				'id' =>3,
    				'name'=> 'PT13314',
    				'teacher_name'=>'NV C',
    				'major'=> 'DGT',
    				'max_student'=>40

    			]
    		])
    	}
   }
}
