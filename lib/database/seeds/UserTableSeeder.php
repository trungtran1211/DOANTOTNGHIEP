<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    		[
    			'email'=>'thanhtrungtran8888@gmail.com',
    			'password'=>bcrypt('123'),
    			'level'=>1
    		],
    		[
    			'email'=>'admin@gmail.com',
    			'password'=>bcrypt('123'),
    			'level'=>1
    		],
    	];
        DB::table('vp_users')->insert ($data);
    }
}
