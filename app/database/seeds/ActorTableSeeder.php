<?php

class ActorTableSeeder extends Seeder {

	public function run()
	{
		DB::table('actors')->delete();

		// Tony Delerme
		Actor::create(array(
				'first_name' => 'Tony',
				'last_name' => 'Delerme',
				'bio' => 'Son of Raynald Delerme',
				'image' => 'tonyd.jpg',
				'facebook' => 'facebook.com/tonyd',
				'twitter' => '@tonyd',
				'instagram' => '@tonyd',
				'published' => 1
			));

		// Sheila Mocombre
		Actor::create(array(
				'first_name' => 'Sheila',
				'last_name' => 'Mocombre',
				'bio' => 'Sheila had her first role in Natalie',
				'image' => 'shaila.jpg',
				'facebook' => 'facebook.com/smocombre',
				'twitter' => '@smocombre',
				'instagram' => 'smocombre',
				'published' => 1
			));
	}
}