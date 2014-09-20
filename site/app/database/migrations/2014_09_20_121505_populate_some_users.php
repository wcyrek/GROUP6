<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PopulateSomeUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$now = date('Y-m-d H:i:s');
		
		DB::table('users')->insert(array(
			'ucid'	=> 'ada6',
			'id'		=> 1,
			'created_at' 	=> $now,
			'updated_at' 	=> $now,
			'first_name'	=> 'Alex',
			'middle_name'	=> 'D',
			'last_name'	=> 'Arias',
			'address'	=> 'test',
			'phone'	=> '123456789',
			'email'	=> 'email@email.com',
			'admin'	=> 1,
		));
		
		DB::table('users')->insert(array(
			'ucid'	=> 'er6',
			'id'		=> 2,
			'created_at' 	=> $now,
			'updated_at' 	=> $now,
			'first_name'	=> 'James',
			'middle_name'	=> 'C',
			'last_name'	=> 'Realman',
			'address'	=> 'test',
			'phone'	=> '123456789',
			'email'	=> 'er6@njit.edu',
			'admin'	=> 0,
		));

		DB::table('users')->insert(array(
			'ucid'	=> 'ltn89',
			'id'		=> 3,
			'created_at' 	=> $now,
			'updated_at' 	=> $now,
			'first_name'	=> 'Luke',
			'middle_name'	=> 'T',
			'last_name'	=> 'Neal',
			'address'	=> '11 Cherry Hill',
			'phone'	=> '123456789',
			'email'	=> 'ltn89@yahoo.com',
			'admin'	=> 0,
		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('users')->where('id', '=', 1)->delete();
		DB::table('users')->where('id', '=', 2)->delete();
		DB::table('users')->where('id', '=', 3)->delete();
	}

}
