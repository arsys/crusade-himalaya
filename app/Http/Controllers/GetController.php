<?php

namespace App\Http\Controllers;
use App\Insta;
use App\Tour;
use App\TourCategory;
use Vinkla\Instagram\Instagram;
use Illuminate\Http\Request;

class GetController extends Controller
{
	public function index()
	{
		return view('frontend.home');
	}

	public function fetchInsta()
	{
		$instagram = new Instagram('5365129520.1677ed0.9a5ea6d9ae654821a210484962ecc42c');
	    $posts = $instagram->media(); //gets 20 latest insta posts of a user
	    $fromDBs = Insta::orderBy('id', 'desc')->take(20)->get(); //get last 20 rows from table
	    foreach( $posts as $post)
	    {
	    	Insta::firstOrCreate(['link' => $post->images->low_resolution->url ,'caption' => 'caption']);
	    }
	    return redirect()->route('show.Insta');
	}
	public function showInsta()
	{
		$instas = Insta::all();
		return view('frontend.insta')->withInstas($instas);
	}	

	public function fetchByCategory($slug)
	{
		$category = TourCategory::where('slug','=', $slug)->first();
		$query = Tour::whereHas('category', function($r) use($category) {
			$r->where('tour_categories.slug','=', $category->slug);
		})->get();
		return view('frontend.pages.travel-style')
		->withResults($query)
		->withCategory($category);
	}

	public function fetchByregion($slug)
	{

	}


}
