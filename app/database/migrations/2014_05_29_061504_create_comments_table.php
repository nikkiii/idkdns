<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function($table) {
			$table->increments('id');
			$table->integer('domain_id');
			$table->string('name', 255);
			$table->string('type', 10);
			$table->integer('modified_at');
			$table->string('account', 40);
			$table->string('comment', 64000);

			$table->index('domain_id');
			$table->index(array('name', 'type'));
			$table->index(array('domain_id', 'modified_at'));

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
		Schema::drop('comments');
	}

}
