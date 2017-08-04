<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categories_id')->unsigned();
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->text('title', 500);
            $table->text('news_file_link', 500);
            $table->text('news_link', 500);
            $table->text('img_link', 500);
            $table->timestamps();
        });
    }

// <a href="{{url('/')}}/medicine/details/{{$med->id}}"><img src="{{url('/')}}/images/medicines/med_{{$med->id}}_1.{{$med->picture1}}" alt="" /></a>
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
