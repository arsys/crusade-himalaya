<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
	public function tour()
	{
		return $this->belongsTo('App\Tour', 'tour_id');
	}

}
