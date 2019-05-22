<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;
    public function sluggable()
    {
    	return [
    		'slug' => [
    			'source' => 'title'
    		]
    	];
	}
	
	public function category()
    {
        return $this->belongsTo('App\PostCategory', 'category_id');
    }
}
