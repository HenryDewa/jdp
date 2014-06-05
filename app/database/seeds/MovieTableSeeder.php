<?php

class MovieTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('movies')->delete();

        // Assassin
        Movie::create(array(
            'movie_title' => 'The Birth of an Assassin',
            'plot' => 'Starring Tony Delerme',
            'release_year' => 2011,
            'trailer' => 'Preview',
            'director' => 'Tutu Demosthene',
            'rating_id' => 1,
            'duration' => 90,
            'list_price' => 10.99,
            'discount_price' => 8.99,
            'poster' => 'poster.jpg',
            'buy_button' => 'Paypal',
            'published' => 1
        ));

        // Diable
        Movie::create(array(
            'movie_title' => 'Le Fils du Diable',
            'plot' => 'First horror film directed by Tutu',
            'release_year' => 2009,
            'trailer' => 'Preview',
            'director' => 'Tutu Demosthene',
            'rating_id' => 4,
            'duration' => 120,
            'list_price' => 8.99,
            'discount_price' => 5.99,
            'poster' => 'diable.jpg',
            'buy_button' => 'Paypal',
            'published' => 1
        ));

        // Hell
        Movie::create(array(
            'movie_title' => 'The Heavenly Side of Hell',
            'plot' => 'Tico best performance in a movie',
            'release_year' => 2013,
            'trailer' => 'Preview',
            'director' => 'Tutu Demosthene',
            'rating_id' => 3,
            'duration' => 96,
            'list_price' => 15.99,
            'discount_price' => 10.99,
            'poster' => 'thsoh.jpg',
            'buy_button' => 'Paypal'
        ));

        // Zanmi
        Movie::create(array(
            'movie_title' => 'Zanmi',
            'plot' => 'Written by Roger Delphin',
            'release_year' => 2013,
            'trailer' => 'Preview',
            'director' => 'Frantzy Seneque',
            'rating_id' => 2,
            'duration' => 96,
            'list_price' => 15.99,
            'discount_price' => 10.99,
            'poster' => 'thsoh.jpg',
            'buy_button' => 'Paypal'
        ));

        // Rasin Mwen
        Movie::create(array(
            'movie_title' => 'Rasin Mwen',
            'plot' => 'Haiti production film',
            'release_year' => 2013,
            'trailer' => 'Preview',
            'director' => '',
            'rating_id' => 3,
            'duration' => 96,
            'list_price' => 15.99,
            'discount_price' => 10.99,
            'poster' => 'thsoh.jpg',
            'buy_button' => 'Paypal'
        ));

        // lala
        Movie::create(array(
            'movie_title' => 'Lala',
            'plot' => 'Action pack movie shot by Samuel Vincent',
            'release_year' => 2013,
            'trailer' => 'Preview',
            'director' => 'Desma Duclair',
            'rating_id' => 5,
            'duration' => 96,
            'list_price' => 15.99,
            'discount_price' => 10.99,
            'poster' => 'poster.jpg',
            'buy_button' => 'Paypal'
        ));

        // Inedit
        Movie::create(array(
            'movie_title' => 'Inedit',
            'plot' => 'Loudie first role in a major film',
            'release_year' => 2013,
            'trailer' => 'Preview',
            'director' => '',
            'rating_id' => 1,
            'duration' => 96,
            'list_price' => 15.99,
            'discount_price' => 10.99,
            'poster' => 'thsoh.jpg',
            'buy_button' => 'Paypal'
        ));

        // Diab Baba
        Movie::create(array(
            'movie_title' => 'Diab Baba',
            'plot' => 'Papa Pye at his best',
            'release_year' => 2013,
            'trailer' => 'Preview',
            'director' => 'Raynald Delerme',
            'rating_id' => 4,
            'duration' => 96,
            'list_price' => 15.99,
            'discount_price' => 10.99,
            'poster' => 'thsoh.jpg',
            'buy_button' => 'Paypal'
        ));

        // Unconditional Love
        Movie::create(array(
            'movie_title' => 'Unconditional Love',
            'plot' => 'Tico best performance in a movie',
            'release_year' => 2013,
            'trailer' => 'Preview',
            'director' => 'Patrick Hans',
            'rating_id' => 2,
            'duration' => 96,
            'list_price' => 15.99,
            'discount_price' => 10.99,
            'poster' => 'thsoh.jpg',
            'buy_button' => 'Paypal'
        ));

        // Against the Jab
        Movie::create(array(
            'movie_title' => 'Against the Jab',
            'plot' => 'New movie by New York journalist Jab',
            'release_year' => 2014,
            'trailer' => 'Preview',
            'director' => 'Jab',
            'rating_id' => 1,
            'duration' => 120,
            'list_price' => 12.99,
            'discount_price' => 8.99,
            'poster' => 'poster.jpg',
            'buy_button' => 'Paypal'
        ));

        // Fatal Assistance
        Movie::create(array(
            'movie_title' => 'Fatal Assistance',
            'plot' => 'Documentary on the Haiti earthquake',
            'release_year' => 2012,
            'trailer' => 'Preview',
            'director' => '',
            'rating_id' => 2,
            'duration' => 120,
            'list_price' => 18.99,
            'discount_price' => 12.99,
            'poster' => 'poster.jpg',
            'buy_button' => 'Paypal'
        ));

        // Margueritte et Sa Fille
        Movie::create(array(
            'movie_title' => 'Margueritte et Sa Fille',
            'plot' => 'Documentary on the Haiti earthquake',
            'release_year' => 2012,
            'trailer' => 'Preview',
            'director' => 'Smith Cassamajor',
            'rating_id' => 2,
            'duration' => 120,
            'list_price' => 18.99,
            'discount_price' => 12.99,
            'poster' => 'poster.jpg',
            'buy_button' => 'Paypal'
        ));


    }
}