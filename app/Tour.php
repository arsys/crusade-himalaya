<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Tour extends Model
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

    public function category()
    {
        return $this->belongsTo('App\TourCategory', 'category_id');
    }

    public function meal() //Works perfectly
    {
        return $this->belongsTo('App\Meal');
    }

    public function group() //Works perfectly
    {
        return $this->belongsTo('App\Group');
    }

    public function difficulty() //Works perfectly
    {
        return $this->belongsTo('App\Difficulty');
    }

    public function region()  //Works perfectly
    {
        return $this->belongsTo('App\Region');
    }

    public function accommodation() //Works perfectly
    {
        return $this->belongsTo('App\Accommodation');
    }
    public function includes()
    {
        return $this->belongsToMany('App\Included','includes_tour', 'tour_id', 'included_id')->orderBy('name', 'asc');
    }

    public function excludes()
    {
        return $this->belongsToMany('App\Excluded','excludes_tour', 'tour_id', 'excluded_id')->orderBy('name', 'asc');
    }    

    public function image()
    {
        return $this->hasOne('App\FeaturedImage');
    }

    public function departure()
    {
        return $this->hasMany('App\Departure', 'tour_id');
    }

    public function itinerary()
    {
        return $this->hasMany('App\Itinerary', 'tour_id')->orderBy('id', 'asc');
    }

    public function slides()
    {
        return $this->hasMany('App\Slide', 'tour_id');
    }


}
