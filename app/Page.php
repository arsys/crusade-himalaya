<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Page extends Model
{
	use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
    	return [
    		'slug' => [
    			'source' => 'title'
    		]
    	];
    }

    public function parent() {
        return $this->belongsTo('App\Page', 'parent_id');
    }

    public function child() {
        return $this->hasMany('App\Page', 'parent_id');
    }    
}
