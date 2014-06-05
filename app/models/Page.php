<?php

class Page extends Eloquent {

	protected $table = 'pages';
	public $timestamps = true;
	protected $softDelete = true;

	public function users()
	{
		return $this->belongsTo('User', 'user_id');
	}

}