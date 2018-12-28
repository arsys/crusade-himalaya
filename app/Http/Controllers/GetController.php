<?php

namespace App\Http\Controllers;
use App\Insta;
use App\Tour;
use App\Region;
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
		$tours = $category->tours()->with('region')->get(['region_id']);
		$regions = $tours->pluck('region')->unique();

		return view('frontend.pages.travel-style')
		->withResults($regions)
		->withCategory($category);
	}

	public function region2package($category,$region)
	{
		$category = TourCategory::where('slug','=', $category)->first();
		$region = Region::where('slug','=',$region)->first();
		$query = Tour::whereHas('category', function ($r) use ($category) {
			$r->where('tour_categories.slug', $category->slug);
		})->whereHas('region', function ($s) use ($region) {
			$s->where('regions.slug', $region->slug);
		})->get();  
		return view('frontend.pages.packages')        
		->withCategory($category)
		->withRegion($region)
		->withResults($query);
	}

	public function fetchByregion($destination)
	{
		$region = Region::where('slug','=',$destination)->first();
		$tours = $region->tours()->with('category')->get(['category_id']);
		$categories = $tours->pluck('category')->unique();

		return view('frontend.pages.destinations')
		->withCategories($categories)
		->withRegion($region);
	}

	public function destionation2package($region,$category)
	{
		$category = TourCategory::where('slug','=', $category)->first();
		$region = Region::where('slug','=',$region)->first();
		$query = Tour::whereHas('category', function ($r) use ($category) {
			$r->where('tour_categories.slug', $category->slug);
		})->whereHas('region', function ($s) use ($region) {
			$s->where('regions.slug', $region->slug);
		})->get();  
		dd($tours);
		return view('frontend.pages.packages')        
		->withCategory($category)
		->withRegion($region)
		->withResults($query);

		
	}	

	public function tripDetail($slug)
	{
		$tour = Tour::where('slug','=', $slug)->first();
		return view('frontend.tour.details')->withTour($tour);
	}



}
