<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('records', function($table) {
			$table->increments('id');
			$table->integer('domain_id')->nullable();
			$table->string('name', 255)->nullable();
			$table->string('type', 10)->nullable();
			$table->string('content', 64000)->nullable();
			$table->integer('ttl')->nullable();
			$table->integer('prio')->nullable();
			$table->integer('change_date')->nullable();
			$table->boolean('disabled');
			$table->string('ordername', 255)->nullable();
			$table->boolean('auth')->default(true);

			$table->index(array('name', 'type'));
			$table->index('domain_id');
			$table->index(array('domain_id', 'ordername'));

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
		Schema::drop('records');
	}

}
