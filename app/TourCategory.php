<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Intervention\Image\Facades\Image;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;
class TourCategory extends Model
{
    protected $table = 'tour_categories';
    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function tours()
    {
        return $this->hasMany('App\Tour', 'category_id');
    }

    public static function  uploadImage($path, $image,$width,$height)
    {
        $filename = md5($image->getClientOriginalName()).'.'. $image->getClientOriginalExtension();
        $location = $path . $filename;
        Image::make($image)->fit($width, $height)->save($location);
        ImageOptimizer::optimize($location);
        return $location;
    }    
}
