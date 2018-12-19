<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
	public function tours()
	{
		return $this->hasMany('App\Tour');
	}
}
