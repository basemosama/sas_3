<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('post_id');
			$table->text('body');
			$table->string('email');
		});
	}

	public function down()
	{
		Schema::drop('comments');
	}
}