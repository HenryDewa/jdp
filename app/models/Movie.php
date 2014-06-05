<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Movie extends \Eloquent implements SluggableInterface
{
    protected $table = 'movies';
    public $timestamps = true;
    protected $softDelete = true;
    protected $fillable = array('movie_title', 'release_year');

    use SluggableTrait;
    protected $sluggable = array(
        'build_from' => 'movie_title',
        'save_to'    => 'slug',
    );

    public static $rules = array(
        'movie_title' => 'required',
        'duration' => 'integer',
        'list_price' => 'regex:/^\d+(\.\d{1,2})?$/',
        'discount_price' => 'regex:/^\d+(\.\d{1,2})?$/',
        'poster' => 'required|image|mimes:jpeg,jpg,bmp,png,gif'
    );

    public static $messages = array(
        'movie_title.required' => 'Please enter a movie title.',
        'duration.integer' => 'Movie duration must be a number in minutes. (ex: 120)',
        'list_price.regex' => 'Please enter a correct value for List Price (ex. 8.99).',
        'discount_price.regex' => 'Please enter a correct value for Discount Price (ex. 8.99).',
        'poster.required' => 'Please upload a poster for the movie.',
    );

    public static function validate($data)
    {
        return \Validator::make($data, static::$rules, static::$messages);
    }

    public function ratings()
    {
        return $this->belongsTo('Rating', 'rating_id');
    }

    public function genres()
    {
        return $this->belongsToMany('App\Models\Genre');
    }

    public function actors()
    {
        return $this->belongsToMany('App\Models\Actor');
    }
}