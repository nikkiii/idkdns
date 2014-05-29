<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCryptokeysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cryptokeys', function($table) {
			$table->increments('id');
			$table->integer('domain_id');
			$table->integer('flags');
			$table->boolean('active');
			$table->text('content');

			$table->index('domain_id');

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
		Schema::drop('cryptokeys');
	}

}
