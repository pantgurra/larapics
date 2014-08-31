<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('collections', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('collection_name');
			$table->timestamps();
		});

		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('remember_token', 100)->nullable();
			$table->string('username');
			$table->string('password');
			$table->timestamps();
		});

		Schema::create('photos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('image');
			$table->string('thumbnail');
			$table->integer('collection_id')->unsigned();
			$table->timestamps();

			$table->foreign('collection_id')->references('id')->on('collections')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('collections');
		Schema::drop('users');
		Schema::drop('photos');
	}

}
