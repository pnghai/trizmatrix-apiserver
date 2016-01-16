<?php

namespace App\Model\Database;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Solution extends Model {

	protected $table = 'solutions';
	public $timestamps = false;
	protected $fillable = array('improvedParam', 'preservedParam', 'principleId', 'priority');

	/**
	 * Get the principle
	 *  @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function principle()
	{
		return $this->belongsTo(Principle::class,'principleId');
	}

	/**
	 * Get the improved parameter
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function improvedParameter()
	{
		return $this->belongsTo(Parameter::class,'improvedParam');
	}

	/**
	 * Get the preserved parameter
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function preservedParameter()
	{
		return $this->belongsTo(Parameter::class,'preservedParam');
	}
}