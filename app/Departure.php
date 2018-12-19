<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departure extends Model
{
	public $timestamps = false;

	public function tour()
	{
		return $this->belongsTo('App\Tour', 'tour_id');
	}

	public function fixedDates($id,$month, $year)
	{
		return $this->where('tour_id', '=' , $id )
		-> whereMonth('start','=',$month)
		->whereYear('start', '=' , $year);
	}    
}
