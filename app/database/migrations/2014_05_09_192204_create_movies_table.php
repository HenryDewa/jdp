<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoviesTable extends Migration {

	public function up()
	{
		Schema::create('movies', function(Blueprint $table) {
			$table->increments('id');
			$table->string('movie_title');
			$table->text('plot');
			$table->date('release_year');
			$table->text('trailer');
			$table->string('director');
			$table->integer('rating_id')->unsigned();
			$table->integer('duration');
			$table->decimal('list_price', 5,2);
			$table->decimal('discount_price', 5,2);
			$table->text('buy_button');
			$table->string('poster');
			$table->boolean('published');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('movies');
	}
}