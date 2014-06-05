<?php

class ActorMovieTableSeeder extends Seeder {

	public function run()
	{
		DB::table('actor_movie')->delete();

		// movie_actor
		ActorMovie::create(array(
				'actor_id' => 1,
				'movie_id' => 1
			));
	}
}