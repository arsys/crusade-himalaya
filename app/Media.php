<?php

namespace App;

use Intervention\Image\Facades\Image;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;
use Illuminate\Database\Eloquent\Model;
use File;

class Media extends Model
{
	protected $table = 'medias';
	protected $fillable = ['path','thumb'];

	public static function  uploadImage($path,$thumb, $image)
	{
		$filename = md5($image->getClientOriginalName()) .'.'. $image->getClientOriginalExtension();
		$path = $path . $filename;
		$thumb = $thumb . $filename;
		Image::make($image)->save($path);
		Image::make($image)->resize(200,300,function ($constraint) {
			$constraint->aspectRatio();
		})->save($thumb);
		ImageOptimizer::optimize($path);
		ImageOptimizer::optimize($thumb);

		return array($path, $thumb);
	}    
	public function countImages($path) {
		$files = File::files(public_path($path));
		$filecount = 0;

		if ($files !== false) {
			$filecount = count($files);
		}

		return $filecount;
	}

    public function slides()
    {
        return $this->hasMany('App\Slide', 'media_id');
    }	
}
