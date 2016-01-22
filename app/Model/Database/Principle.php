<?php

namespace App\Model\Database;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Principle extends Model {

	protected $table = 'principles';
	public $timestamps = false;
	protected $fillable = array('idx', 'title', 'explanation');
	//protected $visible = array('idx', 'title', 'explanation');
}