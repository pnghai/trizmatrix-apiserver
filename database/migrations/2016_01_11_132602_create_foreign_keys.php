<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('solutions', function(Blueprint $table) {
			$table->foreign('improvedParam')->references('id')->on('parameters');
		});
		Schema::table('solutions', function(Blueprint $table) {
			$table->foreign('preservedParam')->references('id')->on('parameters');
		});
		Schema::table('solutions', function(Blueprint $table) {
			$table->foreign('principleId')->references('id')->on('principles');
		});
	}

	public function down()
	{
		Schema::table('solutions', function(Blueprint $table) {
			$table->dropForeign('solutions_improvedParam_foreign');
		});
		Schema::table('solutions', function(Blueprint $table) {
			$table->dropForeign('solutions_preservedParam_foreign');
		});
		Schema::table('solutions', function(Blueprint $table) {
			$table->dropForeign('solutions_principleId_foreign');
		});
	}
}