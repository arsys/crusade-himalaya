<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Region extends Model
{
	public function tours()
	{
		return $this->hasMany('App\Tour');
	}
}
