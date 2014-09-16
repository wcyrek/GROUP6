<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSkillTypesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_types', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        
        Schema::table('skills', function(Blueprint $table) {
        	$table->foreign('type_id')->references('id')->on('skill_types')->onDelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('skill_types');
    }

}
