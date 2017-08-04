<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	public function up()
	{
		Schema::create('posts', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('category_id')->unsigned()->index();
			$table->integer('user_id')->unique()->unsigned();
			$table->integer('league_id')->unique()->unsigned();
			$table->string('title');
			$table->string('slug');
			$table->text('content');
			$table->text('excerpt');
			$table->timestamp('published_at');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('posts');
	}
}