<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PopulateSomeSkills extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$now = date('Y-m-d H:i:s');
		
		$id = DB::table('skilltypes')->insertGetId(array(
			'name'=>'Programming'
		));
		
		DB::table('skills')->insert(array(
			'name'			=> 'Java',
			'type_id'		=> $id,
			'created_at' 	=> $now,
			'updated_at' 	=> $now
		));
		
		DB::table('skills')->insert(array(
			'name'			=> 'C++',
			'type_id'		=> $id,
			'created_at' 	=> $now,
			'updated_at' 	=> $now
		));
		
		DB::table('skills')->insert(array(
			'name'			=> 'PHP',
			'type_id'		=> $id,
			'created_at' 	=> $now,
			'updated_at' 	=> $now
		));
		
		DB::table('skills')->insert(array(
			'name'			=> 'Python',
			'type_id'		=> $id,
			'created_at' 	=> $now,
			'updated_at' 	=> $now
		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('skilltypes')->where('name', '=', 'Programming')->delete();
	}

}
