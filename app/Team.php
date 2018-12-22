<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
        public function member() //Works perfectly
        {
        	return $this->belongsTo('App\Member');
        }
    }
