<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('domains', function($table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->string('master', 128)->nullable();
			$table->integer('last_check')->nullable();
			$table->string('type', 6);
			$table->integer('notified_serial')->nullable();
			$table->string('account', 40)->nullable();

			$table->index('name');

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
		Schema::drop('domains');
	}

}
