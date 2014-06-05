<?php

class GenreTableSeeder extends Seeder {

	public function run()
	{
        DB::table('genres')->delete();

        $data = array(
            array('genre' =>'Action'),
            array('genre' =>'Adventure'),
            array('genre' =>'Animation'),
            array('genre' =>'Biography'),
            array('genre' =>'Comedy'),
            array('genre' =>'Crime'),
            array('genre' =>'Documentary'),
            array('genre' =>'Drama'),
            array('genre' =>'Family'),
            array('genre' =>'Fantasy'),
            array('genre' =>'Film-Noir'),
            array('genre' =>'History'),
            array('genre' =>'Horror'),
            array('genre' =>'Music'),
            array('genre' =>'Musical'),
            array('genre' =>'Mystery'),
            array('genre' =>'Romance'),
            array('genre' =>'Sci-Fi'),
            array('genre' =>'Sport'),
            array('genre' =>'Thriller'),
            array('genre' =>'War'),
            array('genre' =>'Western')
        );

        DB::table('genres')->insert($data);
	}
}