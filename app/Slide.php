<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
	protected $fillable = ['path', 'thumb','name'];
	public function tour()
	{
		return $this->belongsTo('App\Tour', 'tour_id');
	}

}
