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
        Schema::create('skilltypes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });
        

        Schema::table('skills', function(Blueprint $table) {
        	$table->foreign('type_id')->references('id')->on('skilltypes')->onDelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('skilltypes');
    }

}
