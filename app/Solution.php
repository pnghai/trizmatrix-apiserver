<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model {

	protected $table = 'solutions';
	public $timestamps = true;
	protected $fillable = array('improvedParam', 'preservedParam', 'principleId', 'priority');
	protected $visible = array('improvedParam', 'preservedParam', 'principleId', 'priority');

}