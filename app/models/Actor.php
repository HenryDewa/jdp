<?php

class Actor extends Eloquent {

	protected $table = 'actors';
	public $timestamps = true;
	protected $softDelete = true;

	public function movies()
	{
		return $this->belongsToMany('Movie');
	}

}