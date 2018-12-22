<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	public function team()
	{
		return $this->hasMany('App\Team');
	}
}
