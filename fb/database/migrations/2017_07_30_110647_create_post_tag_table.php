<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostTagTable extends Migration {

	public function up()
	{
		Schema::create('post_tag', function(Blueprint $table) {
			$table->integer('post_id')->unique()->unsigned();
			$table->integer('tag_id')->unique()->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('post_tag');
	}
}