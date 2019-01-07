<?php

namespace App\Http\Controllers;
use App\Insta;
use App\Tour;
use App\Region;
use App\TourCategory;
use Vinkla\Instagram\Instagram;
use Illuminate\Http\Request;
use PDF;

class GetController extends Controller
{
	public function index()
	{
		return view('frontend.home');
	}

	public function fetchInsta()
	{
		$instagram = new Instagram('9206517006.1677ed0.68ddd01c5ff942e8aa0587a75a1f0579');
	    $posts = $instagram->media(); //gets 20 latest insta posts of a user
	    // dd($posts);
	    $fromDBs = Insta::orderBy('id', 'desc')->take(20)->get(); //get last 20 rows from table
	    foreach( $posts as $post)
	    {
	    	Insta::firstOrCreate([
	    		'thumb_link' => $post->images->thumbnail->url  ,
	    		'standard_link' => $post->images->standard_resolution->url  ,
	    		'caption' => $post->caption->text
	    	]);
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
		return view('frontend.pages.travel-style-packages')        
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

	public function destination2package($region,$category)
	{
		$category = TourCategory::where('slug','=', $category)->first();
		$region = Region::where('slug','=',$region)->first();
		$query = Tour::whereHas('category', function ($r) use ($category) {
			$r->where('tour_categories.slug', $category->slug);
		})->whereHas('region', function ($s) use ($region) {
			$s->where('regions.slug', $region->slug);
		})->get();  
		return view('frontend.pages.destination-packages')        
		->withCategory($category)
		->withRegion($region)
		->withResults($query);

		
	}	

	public function tripDetail($slug)
	{
		$tour = Tour::where('slug','=', $slug)->first();
		$cat = $tour->category->slug;
		$similars = Tour::whereHas('category', function ($r) use($cat){
			$r->where('tour_categories.slug', '=', $cat);
		})
		->orderByRaw('RAND()')
		->take(3)
		->get();

		$depature_dates = $tour->departure()->fixedDates($tour->id, date('m'),date('Y'))->get();
		return view('frontend.tour.details')
		->withTour($tour)
		->withSimilars($similars)
		->withDepartures($depature_dates);
	}


	public function downloadPDF($slug)
	{
		$tour = Tour::where('slug','=', $slug)->first();
		// return view('frontend.tour.pdf')->withTour($tour);
		$pdf = PDF::loadView('frontend.tour.pdf', compact('tour'));
		return $pdf->download($tour->title.'.pdf');
	}
}
