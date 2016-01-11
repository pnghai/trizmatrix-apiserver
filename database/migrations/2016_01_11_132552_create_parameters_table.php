<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParametersTable extends Migration {

	public function up()
	{
		Schema::create('parameters', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('idx')->unique()->unsigned();
			$table->string('title',250)->unique();
			$table->string('englishTitle',250)->unique();
			$table->text('explanation');
		});
	}

	public function down()
	{
		Schema::drop('parameters');
	}
}