<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSolutionsTable extends Migration {

	public function up()
	{
		Schema::create('solutions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('improvedParam')->unsigned();
			$table->integer('preservedParam')->unsigned();
			$table->integer('principleId')->unsigned();
			$table->integer('priority')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('solutions');
	}
}