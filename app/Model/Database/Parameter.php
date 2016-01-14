<?php

namespace App\Model\Database;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Parameter extends Model {

	protected $primaryKey = 'id';
	protected $table = 'parameters';
	public $timestamps = true;
	protected $fillable = array('idx', 'title', 'englishTitle', 'explanation');
	protected $visible = array('idx', 'title', 'englishTitle', 'explanation');

}