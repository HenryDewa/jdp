<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('pages', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('movies', function(Blueprint $table) {
			$table->foreign('rating_id')->references('id')->on('ratings')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('actor_movie', function(Blueprint $table) {
			$table->foreign('actor_id')->references('id')->on('actors')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('actor_movie', function(Blueprint $table) {
			$table->foreign('movie_id')->references('id')->on('movies')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('genre_movie', function(Blueprint $table) {
			$table->foreign('genre_id')->references('id')->on('genres')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('genre_movie', function(Blueprint $table) {
			$table->foreign('movie_id')->references('id')->on('movies')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('pages', function(Blueprint $table) {
			$table->dropForeign('pages_user_id_foreign');
		});
		Schema::table('movies', function(Blueprint $table) {
			$table->dropForeign('movies_rating_id_foreign');
		});
		Schema::table('actor_movie', function(Blueprint $table) {
			$table->dropForeign('actor_movie_actor_id_foreign');
		});
		Schema::table('actor_movie', function(Blueprint $table) {
			$table->dropForeign('actor_movie_movie_id_foreign');
		});
		Schema::table('genre_movie', function(Blueprint $table) {
			$table->dropForeign('genre_movie_genre_id_foreign');
		});
		Schema::table('genre_movie', function(Blueprint $table) {
			$table->dropForeign('genre_movie_movie_id_foreign');
		});
	}
}