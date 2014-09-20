<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PopulateSomeTests extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$now = date('Y-m-d H:i:s');
		
		DB::table('tests')->insert(array(
			'id'		=> 1,
			'created_at' 	=> $now,
			'updated_at' 	=> $now,
			'start_date'	=> '2014-09-22 18:00:00',
			'end_date'	=> '2014-09-22 21:00:00',
			'comment'	=> 'Test-J100',
			'skill_id'	=> 1,
		));

		DB::table('tests')->insert(array(
			'id'		=> 2,
			'created_at' 	=> $now,
			'updated_at' 	=> $now,
			'start_date'	=> '2014-09-23 18:00:00',
			'end_date'	=> '2014-09-23 21:00:00',
			'comment'	=> 'Test-J100',
			'skill_id'	=> 1,
		));

		DB::table('tests')->insert(array(
			'id'		=> 3,
			'created_at' 	=> $now,
			'updated_at' 	=> $now,
			'start_date'	=> '2014-09-24 18:00:00',
			'end_date'	=> '2014-09-24 21:00:00',
			'comment'	=> 'Test-J100',
			'skill_id'	=> 1,
		));

		DB::table('tests')->insert(array(
			'id'		=> 4,
			'created_at' 	=> $now,
			'updated_at' 	=> $now,
			'start_date'	=> '2014-09-25 18:00:00',
			'end_date'	=> '2014-09-25 21:00:00',
			'comment'	=> 'Test-C102',
			'skill_id'	=> 2,
		));

		DB::table('tests')->insert(array(
			'id'		=> 5,
			'created_at' 	=> $now,
			'updated_at' 	=> $now,
			'start_date'	=> '2014-09-26 18:00:00',
			'end_date'	=> '2014-09-26 21:00:00',
			'comment'	=> 'Test-C102',
			'skill_id'	=> 2,
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
		DB::table('users')->where('id', '=', 4)->delete();
		DB::table('users')->where('id', '=', 5)->delete();
	}

}
