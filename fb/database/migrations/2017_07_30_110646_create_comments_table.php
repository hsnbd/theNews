<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unique()->unsigned();
			$table->enum('status', array('pending', 'publish', 'spam'));
			$table->text('content');
			$table->integer('commentable_id')->unsigned();
			$table->string('commentable_type');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('comments');
	}
}