<?php

namespace App\Http\Controllers;
use App\Insta;
use App\Tour;
use App\Region;
use App\TourCategory;
use Session;
use Mail;
use App\Mail\Booking;
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
	    	$path = $post->images->thumbnail->url ;
	    	echo "<img src=".$path."><br>";
	    }
	    // return redirect()->route('show.Insta');
	}
	public function showInsta()
	{
		$instas = Insta::all();
		return view('frontend.insta')->withInstas($instas);
	}

	public function fetchByCategory($slug)
	{
		$category = TourCategory::where('slug','=', $slug)->first();
		$tours = $category->tours()->has('region')->with('region')->get(['region_id']);
		if ($tours->count() > 0) {
			$regions = $tours->pluck('region')->unique();
			return view('frontend.pages.travel-style')
			->withResults($regions)
			->withCategory($category);
		}
		else{
			$query = Tour::whereHas('category', function ($r) use ($category) {
				$r->where('tour_categories.slug', $category->slug);
			})->get();
			return view('frontend.pages.travel-style-no-region')
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
	public function stepOne(Request $request)
	{
		$data =  array(
            'date' => $request->date
		);
		$tour = Tour::where('slug','=', $request->slug)->first();
		return view('frontend.tour.book.step1')
		->withTour($tour)
		->withData($data);
	}

	public function stepTwo(Request $request)
	{
		$data =  array(
			'travellers' => $request->travellers,
            'date' => $request->date,
            'budget' => $request->budget
		);
		$tour = Tour::where('id','=', $request->tour_id)->first();
		return view('frontend.tour.book.step2')
		->withTour($tour)
		->withData($data);
	}
	public function stepThree(Request $request)
	{
		$this->validate($request, [
			'fullname' => 'required',
			'gender' => 'required',
			'dob' => 'required',
			'email' => 'required',
			'mobile' => 'required',
			'address' => 'required',
			'country' => 'required',
			'passport_no' => 'required',
			'passport_exp' => 'required'
		]);
		if ($request->insurance) {
			$this->validate($request, [
				'insurance_policy' => 'required'
			]);
		}
		if ($request->travellers > 1) {
			$this->validate($request, [
				'otherName.*' => 'required'
			]);
		}
		$userIP = $request->ip();
		$IPdata = file_get_contents("http://api.ipstack.com/{$userIP}?access_key=2f40cb1cb05f40c9439fe91a309910b0");
		$IPdata = json_decode($IPdata);
		$user_info = "IP: {$IPdata->ip} <br> [ Country: <b>{$IPdata->country_name}</b> | City: {$IPdata->city} ]";
		$tour = Tour::where('id','=', $request->tour_id)->first();
		$sub = "!! New Booking !! for ". $tour->title." ". $tour->days." Days";
		$data = array(
            'start_date' => $request->start_date,
            'start_date' => $request->budget,
			'name' => $request->fullname,
            'subject' => $sub,
            'trip_name' => $tour->title." ". $tour->days." Days",
			'email' => $request->email,
			'gender' => $request->gender,
			'dob' => $request->dob,
			'mobile' => $request->mobile,
			'address' => $request->address,
			'country' => $request->country,
			'passport_no' => $request->passport_no,
			'passport_exp' => $request->passport_exp,
			'user_info' => $user_info,
		);
		if ($request->insurance) {
			$data['insurance_policy_no'] = $request->insurance_policy;
		}
		if ($request->travellers > 1) {
			for ($i = 0; $i < $request->travellers; $i++) {
				$data["otherName" . $i] = $request->otherName[$i];
			}
		}
		Mail::send(new Booking($data));

		Session::flash('success', 'Email sent sucessfully!');
		return redirect()->route('trip.thankyou', $tour->slug)->withTour($tour);

	}
	public function getThankyou()
	{
		return view('frontend.tour.book.step3');
    }

    public function getFeed(Request $request, Tour $tour)
    {
        return $tour;
    }
}
