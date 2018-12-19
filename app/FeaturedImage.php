<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeaturedImage extends Model
{
    protected $fillable = ['banner','thumb'];
    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }
}
