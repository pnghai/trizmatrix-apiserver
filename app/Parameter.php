<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model {

	protected $table = 'parameters';
	public $timestamps = true;
	protected $fillable = array('idx', 'title', 'englishTitle', 'explanation');
	protected $visible = array('idx', 'title', 'englishTitle', 'explanation');

}