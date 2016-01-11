<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Principle extends Model {

	protected $table = 'principles';
	public $timestamps = true;
	protected $fillable = array('idx', 'title', 'explanation');
	protected $visible = array('idx', 'title', 'explanation');

}