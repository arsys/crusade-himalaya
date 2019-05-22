<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
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
    protected $table ="postCategories";
    //

    public function posts()
    {
        return $this->hasMany('App\Post', 'category_id');
    }
}
