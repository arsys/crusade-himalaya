<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\Team;
use App\TourCategory;
use App\Region;
use App\Carousel;
use App\Itinerary;
use App\Departure;
use App\Partner;
use App\Event;
use App\Page;
use App\Post;
use DB;
use PDF;
class NewController extends Controller
{
    //Get Home Page
    public function getIndex()
    {
        $featureds = Tour::where('status',1)->where('featured',1)->take(6)->get();
        $categories = TourCategory::all();
        $carousels = Carousel::where('status' ,1)->get();
        $partners = Partner::all();

        $oddDestinations = DB::table('regions')
        ->select(DB::raw('*'))
        ->whereRaw('MOD(id, 2) = 1')
        ->get();

        $evenDestinations = DB::table('regions')
        ->select(DB::raw('*'))
        ->whereRaw('MOD(id, 2) = 0')
        ->get();

        return view('new.index')
        ->withCarousels($carousels)
        ->withCategories($categories)
        ->withFeatureds($featureds)
        ->withPartners($partners)
        ->withOdds($oddDestinations)
        ->withEvens($evenDestinations);
    }
    //Get Events
    public function getEvents()
    {
       $Jan = Event::whereMonth('start_date','=', 1)->get();
       $Feb = Event::whereMonth('start_date','=', 2)->get();
       $Mar = Event::whereMonth('start_date','=', 3)->get();
       $Apr = Event::whereMonth('start_date','=', 4)->get();
       $May = Event::whereMonth('start_date','=', 5)->get();
       $Jun = Event::whereMonth('start_date','=', 6)->get();
       $Jul = Event::whereMonth('start_date','=', 7)->get();
       $Aug = Event::whereMonth('start_date','=', 8)->get();
       $Sep = Event::whereMonth('start_date','=', 9)->get();
       $Oct = Event::whereMonth('start_date','=', 10)->get();
       $Nov = Event::whereMonth('start_date','=', 11)->get();
       $Dec = Event::whereMonth('start_date','=', 12)->get();
       return view('new.calender')->withJan($Jan) ->withFeb($Feb)->withMar($Mar)
       ->withApr($Apr)->withMay($May)->withJun($Jun)
       ->withJul($Jul)->withAug($Aug)->withSep($Sep)
       ->withOct($Oct)->withNov($Nov)->withDec($Dec);     
    } 

    public function getAbout()
    {
        return view('new.about');
    } 

    public function getPosts()
    {
        $posts = Post::where('published',1)->get();
        return view('new.blog.index')->withPosts($posts);
    }

    public function getContact()
    {
        return view('new.contact');
    } 

    //Get Single Trip
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
		return view('new.product.index')
		->withTour($tour)
		->withSimilars($similars)
		->withDepartures($depature_dates);
    }

    //Get Booking Page
    public function tripBook(Request $request)
    {
		$data =  array(
            'date' => $request->date
		);
		$tour = Tour::where('slug','=', $request->slug)->first();
		return view('new.product.booking.book')
		->withTour($tour)
		->withData($data);        
    }
    
    //Destination
	public function fetchByregion($destination)
	{
		$region = Region::where('slug','=',$destination)->first();
		$tours = $region->tours()->with('category')->get(['category_id']);
		$categories = $tours->pluck('category')->unique();

		return view('new.destination')
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
		return view('new.destination-packages')
		->withCategory($category)
		->withRegion($region)
		->withResults($query);


	}
    //Travel Style
    public function fetchByCategory($slug)
	{
		$category = TourCategory::where('slug','=', $slug)->first();
        $tours = $category->tours()->has('region')->with('region')->get(['region_id']);
		if ($tours->count() > 0) {
			$regions = $tours->pluck('region')->unique();
			return view('new.travel-style')
			->withResults($regions)
			->withCategory($category);
		}
		else{
			$query = Tour::whereHas('category', function ($r) use ($category) {
				$r->where('tour_categories.slug', $category->slug);
			})->get();
			return view('new.travel-style-no-region')
			->withResults($query)
			->withCategory($category);
		}
    }
    
	public function region2package($category,$region)
	{
		$category = TourCategory::where('slug','=', $category)->firstOrFail();
		$region = Region::where('slug','=',$region)->firstOrFail();
		$query = Tour::whereHas('category', function ($r) use ($category) {
			$r->where('tour_categories.slug', $category->slug);
		})->whereHas('region', function ($s) use ($region) {
			$s->where('regions.slug', $region->slug);
		})->get();
		return view('new.travel-style-packages')
		->withCategory($category)
		->withRegion($region)
		->withResults($query);
    }   

    //Ajax Search 
    public function ajaxsearchdeparture(Request $request)
    {
        $tour = Tour::find($request->tour_id);
        $departures = Departure::where('tour_id', '=', $request->tour_id)
        ->whereMonth('start', '=', $request->month)
        ->whereYear('start', '=', $request->year)
        ->get();
    
        return view('new.product.partials.dates', compact('departures', 'tour'));
    }    
     
    public function thankYou()
    {
        return view('new.product.booking.thankyou');
    }

    public function getpage($slug){
        $page = Page::where('slug','=', $slug)->firstOrFail();
        return view('new.page')->withPage($page);
    }    

    public function getSitemap(){
        return view('new.sitemap');
    }

    public function getPartner(){
        $medias = Partner::where('type',1)->get(); //media
        $accommodations = Partner::where('type',2)->get(); //accommodation
        $travels = Partner::where('type',3)->get(); //travel
        return view('new.press')
        ->withMedias($medias)
        ->withAccommodations($accommodations)
        ->withTravels($travels);
    }  
    
	public function downloadPDF($slug)
	{
		$tour = Tour::where('slug','=', $slug)->first();
		$pdf = PDF::loadView('new.product.pdf', compact('tour'));
		return $pdf->download($tour->title.'.pdf');
	}    
}
