<?php

class Rating extends \Eloquent {

	protected $table = 'ratings';
	public $timestamps = true;
	protected $softDelete = false;

	public function movies()
	{
		return $this->hasMany('Movie');
	}

}