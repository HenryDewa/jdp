<?php

class Genre extends Eloquent {

	protected $table = 'genres';
	public $timestamps = true;
	protected $softDelete = false;

	public function movies()
	{
		return $this->belongsToMany('Movie');
	}

}