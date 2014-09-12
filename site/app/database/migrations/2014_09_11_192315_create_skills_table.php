<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSkillsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
	    $table->integer('value')->default(0);
	    $table->integer('type_id')->unsigned();
	    $table->timestamps();
        });

	  Schema::table('skills', function(Blueprint $table) {
		 $table->foreign('type_id')->references('id')->on('skilltypes');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('skills');
    }

}
