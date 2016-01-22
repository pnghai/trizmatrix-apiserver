<?php

namespace App\Model\Database;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Parameter extends Model {

	protected $table = 'parameters';
	public $timestamps = false;
	protected $fillable = array('idx', 'title', 'englishTitle', 'explanation');

	}