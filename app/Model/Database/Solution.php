<?php

namespace App\Model\Database;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Solution extends Model {

	protected $table = 'solutions';
	protected $primaryKey = 'id';
	public $timestamps = true;
	protected $fillable = array('improvedParam', 'preservedParam', 'principleId', 'priority');
	protected $visible = array('improvedParam', 'preservedParam', 'principleId', 'priority');

}