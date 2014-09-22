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
		
		$id = DB::table('skill_types')->insertGetId(array(
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
		
		DB::table('skills')->insert(array(
			'name'			=> 'C#',
			'type_id'		=> $id,
			'created_at' 	=> $now,
			'updated_at' 	=> $now
		));
		
		DB::table('skills')->insert(array(
			'name'			=> 'Visual Basic',
			'type_id'		=> $id,
			'created_at' 	=> $now,
			'updated_at' 	=> $now
		));

		DB::table('skills')->insert(array(
			'name'			=> 'C',
			'type_id'		=> $id,
			'created_at' 	=> $now,
			'updated_at' 	=> $now
		));

		DB::table('skills')->insert(array(
			'name'			=> 'Assembly',
			'type_id'		=> $id,
			'created_at' 	=> $now,
			'updated_at' 	=> $now
		));
		
		$id = DB::table('skill_types')->insertGetId(array(
				'name'=>'Communications'
		));
		
		DB::table('skills')->insert(array(
			'name'			=> 'Report Writing',
			'type_id'		=> $id,
			'created_at' 	=> $now,
			'updated_at' 	=> $now
		));
		
		DB::table('skills')->insert(array(
			'name'			=> 'Public Speaking',
			'type_id'		=> $id,
			'created_at' 	=> $now,
			'updated_at' 	=> $now
		));
		
		$id = DB::table('skill_types')->insertGetId(array(
				'name'=>'Databases'
		));
		
		DB::table('skills')->insert(array(
			'name'			=> 'SQL',
			'type_id'		=> $id,
			'created_at' 	=> $now,
			'updated_at' 	=> $now
		));
		
		DB::table('skills')->insert(array(
			'name'			=> 'MySQL',
			'type_id'		=> $id,
			'created_at' 	=> $now,
			'updated_at' 	=> $now
		));
		
		DB::table('skills')->insert(array(
			'name'			=> 'OracleDB',
			'type_id'		=> $id,
			'created_at' 	=> $now,
			'updated_at' 	=> $now
		));
		
		$id = DB::table('skill_types')->insertGetId(array(
				'name'=>'Frameworks'
		));
		
		DB::table('skills')->insert(array(
			'name'			=> 'Grails',
			'type_id'		=> $id,
			'created_at' 	=> $now,
			'updated_at' 	=> $now
		));
		
		DB::table('skills')->insert(array(
			'name'			=> 'Laravel',
			'type_id'		=> $id,
			'created_at' 	=> $now,
			'updated_at' 	=> $now
		));
		
		DB::table('skills')->insert(array(
			'name'			=> 'Spring',
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
		DB::table('skill_types')->where('name', '=', 'Programming')->delete();
		DB::table('skill_types')->where('name', '=', 'Communications')->delete();
		DB::table('skill_types')->where('name', '=', 'Databases')->delete();
		DB::table('skill_types')->where('name', '=', 'Frameworks')->delete();
	}

}
