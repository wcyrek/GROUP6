<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PopulateSomeRelationships extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$now = date('Y-m-d H:i:s');
		
		DB::table('user_skill')->insert(array(
			'id'		=> 1,
			'value' 	=> 6,
			'user_id' 	=> 1,
			'skill_id'	=> 1,
			'created_at' 	=> $now,
			'updated_at' 	=> $now,
		));

		DB::table('user_skill')->insert(array(
			'id'		=> 2,
			'value' 	=> 12,
			'user_id' 	=> 1,
			'skill_id'	=> 2,
			'created_at' 	=> $now,
			'updated_at' 	=> $now,
		));

		DB::table('user_skill')->insert(array(
			'id'		=> 3,
			'value' 	=> 42,
			'user_id' 	=> 1,
			'skill_id'	=> 3,
			'created_at' 	=> $now,
			'updated_at' 	=> $now,
		));

		DB::table('user_skill')->insert(array(
			'id'		=> 4,
			'value' 	=> 7,
			'user_id' 	=> 2,
			'skill_id'	=> 4,
			'created_at' 	=> $now,
			'updated_at' 	=> $now,
		));
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('user_skill')->where('id', '=', 1)->delete();
		DB::table('user_skill')->where('id', '=', 2)->delete();
		DB::table('user_skill')->where('id', '=', 3)->delete();
		DB::table('user_skill')->where('id', '=', 4)->delete();
	}

}
