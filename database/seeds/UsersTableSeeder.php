<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users = [
    		[
    			'name' => 'thienth',
    			'avatar' => '',
    			'email' => 'admin@gmail.com',
    			'password' => Hash::make('123456'),
    			'role' => 900
    		],
    		[
    			'name' => 'chungcc',
    			'avatar' => '',
    			'email' => 'chungcc@gmail.com',
    			'password' => Hash::make('123456'),
    			'role' => 900
    		],
    		[
    			'name' => 'dungcc',
    			'avatar' => '',
    			'email' => 'dungcc@gmail.com',
    			'password' => Hash::make('123456'),
    			'role' => 900
    		]
    	];
        DB::table('users')->insert($users);
    }
}
