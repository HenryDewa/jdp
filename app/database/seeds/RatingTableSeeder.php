<?php

class RatingTableSeeder extends Seeder {

	public function run()
	{
		DB::table('ratings')->delete();

        $data = array(
            array('rating' =>'G'),
            array('rating' =>'PG'),
            array('rating' =>'PG-13'),
            array('rating' =>'R'),
            array('rating' =>'MA'),
            array('rating' =>'NR')
        );

        DB::table('ratings')->insert($data);
	}
}