<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model {
	protected $fillable = [
		'brand_title',
		'brand_color'
	];

	public function guideline()
	{
		return $this->hasMany(Guideline::class);
	}

}
