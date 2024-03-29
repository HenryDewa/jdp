<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGenreMovieTable extends Migration {

	public function up()
	{
		Schema::create('genre_movie', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('genre_id')->unsigned()->index();
			$table->integer('movie_id')->unsigned()->index();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('genre_movie');
	}
}