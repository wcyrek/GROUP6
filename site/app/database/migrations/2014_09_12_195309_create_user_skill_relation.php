<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSkillRelation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_skill', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('value')->default(0);
			$table->integer('user_id')->unsigned();
			$table->integer('skill_id')->unsigned();
			$table->timestamps();
		});
        

		Schema::table('user_skill', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade')->onUpdate('cascade');
        });
		
		Schema::table('skills', function(Blueprint $table) {

			$table->dropColumn('value');
		});
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_skill');
		
		Schema::table('skills', function(Blueprint $table) {
			$table->integer('value')->default(0);
		});
	}

}
