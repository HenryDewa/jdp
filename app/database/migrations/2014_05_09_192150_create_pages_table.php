<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTable extends Migration {

	public function up()
	{
		Schema::create('pages', function(Blueprint $table) {
			$table->increments('id');
			$table->string('page_title')->unique();
			$table->text('page_body');
			$table->string('page_slug')->unique();
			$table->binary('image');
			$table->integer('user_id')->unsigned();
			$table->integer('position');
			$table->boolean('published');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('pages');
	}
}