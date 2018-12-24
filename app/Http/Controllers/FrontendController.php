<?php

namespace App\Http\Controllers;
use App\Tour;
use App\TourCategory;
use App\Carousel;
use App\Itinerary;
use App\Departure;
use App\Insta;
use App\Partner;
use App\Event;
use Calendar;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function getIndex()
    {
        $featureds = Tour::where('status',1)->where('featured',1)->take(4)->get();
        $categories = TourCategory::all();
        $carousels = Carousel::where('status' ,1)->get();
        $instaFeeds = Insta::take(10)->get();
        $partners = Partner::all();

        return view('frontend.home')
        ->withCarousels($carousels)
        ->withCategories($categories)
        ->withFeatureds($featureds)
        ->withInstafeeds($instaFeeds)
        ->withPartners($partners);
    }

    public function getAbout()
    {
        return view('frontend.about');
    } 

    public function truelyNepal()
    {        
        return view('frontend.trulynepal');
    } 

    public function getServices()
    {

        return view('frontend.service');
    }   

    public function getContact()
    {
     return view('frontend.contact'); 
 }
 public function getProduct()
 {
    return view('frontend.product');
}
public function getContact1()
{
    return view('frontend.contact1');
}
public function getAbout1()
{
    return view('frontend.about1');
}
public function getCategory()
{
    return view ('frontend.category');
}
public function getReview()
{
    return view('frontend.review');
}
public function getBookingform()
{
    return view('frontend.bookingform');
}
public function getBookingstep1()
{
    return view('frontend.bookingstep1');
}
public function getSlideshow()
{
    return view('frontend.slideshow'); 
}


    //Gets single product details
public function tourDetailtest($slug)
{
    $tour = Tour::where('slug', '=', $slug)
    ->first();

    $itineraries = Itinerary::where('tour_id','=', $tour->id)
    ->orderBy('id', 'asc')->get();

    $dates_count = Departure::where('tour_id','=',$tour->id)->get();    

    $cat = $tour->category->name;

    $similars = Tour::whereHas('category', function ($r) use ($cat) {
        $r->where('tcategories.name', '=', $cat);
    })
    ->orderByRaw('RAND()')
    ->take(3)
    ->get();

    // $reviews = Review::where('tour_id','=',$tour->id)
    // ->where('status','=', 1)
    // ->orderBy('created_at','DESC')
    // ->limit(3)
    // ->get();

    $depature_dates = $tour->departure()->fixedDates($tour->id, date('m'),date('Y'))->get();

    return view('public.tour.tour-detail-test')
    ->withTour($tour)
    ->withItineraries($itineraries)
    ->withDepatures($depature_dates)
    // ->withReviews($reviews)
    ->withSimilars($similars)
    ->withDatecount($dates_count);
}  

public function eventCalender()
{
    $events = [];
    $data = Event::all();
    if($data->count()) {
        foreach ($data as $key => $value) {
            $events[] = Calendar::event(
                $value->title,
                true,
                new \DateTime($value->start_date),
                new \DateTime($value->end_date.' +1 day'),
                null,
                    // Add color and link on event
                [
                    'color' => '#2ed3ae',
                    'url' => $value->url,                ]
            );
        }
    }
    $calendar = Calendar::addEvents($events);
    return view('frontend.calender', compact('calendar'));
}

}