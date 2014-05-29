<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTsigkeysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tsigkeys', function($table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->string('algorithm', 50);
			$table->string('secret', 255);

			$table->unique(array('name', 'algorithm'));

			$table->integer('created_at');
			$table->integer('updated_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tsigkeys');
	}

}
