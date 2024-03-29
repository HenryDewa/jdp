<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActorMovieTable extends Migration {

	public function up()
	{
		Schema::create('actor_movie', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('actor_id')->unsigned()->index();
			$table->integer('movie_id')->unsigned()->index();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('actor_movie');
	}
}