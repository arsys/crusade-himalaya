<?php

namespace App\Http\Controllers;
use App\Tour;
use App\Team;
use App\TourCategory;
use App\Carousel;
use App\Itinerary;
use App\Departure;
use App\Insta;
use App\Partner;
use App\Event;
use App\Page;
use App\Post;
use DB;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function getIndex()
    {
        $featureds = Tour::where('status',1)->where('featured',1)->take(6)->get();
        $categories = TourCategory::all();
        $carousels = Carousel::where('status' ,1)->get();
        $instaFeeds = Insta::orderByRaw('RAND()')->take(10)->get();
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
        ->withInstafeeds($instaFeeds)
        ->withPartners($partners)
        ->withOdds($oddDestinations)
        ->withEvens($evenDestinations);
    }

    public function getAbout()
    {
        $teams = Team::whereHas('member', function ($r) {
            $r->where('name', 'Administration');
        })->get();
        $others = Team::whereHas('member', function ($r) {
            $r->whereNotIn('members.name', ['Administration']);
        })->get();
        return view('frontend.about')
        ->withTeams($teams)
        ->withOthers($others);
    }

        public function feeds(Request $request, Tour $tour)
        {
            return $tour;
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
public function getDestination()
{
    return view('frontend.destination');
}
public function getPackages(){
    return view('frontend.packages');
}

public function getComingSoon()
{
    return view('frontend.comingsoon');
}
public function getPreloader()
{
    return view('frontend.preloader');
}
public function getterms()
{
    return view('frontend.terms');
}

public function getpage($slug){
    $page = Page::where('slug','=', $slug)->firstOrFail();
    return view('frontend.page')->withPage($page);
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
    ->whereNotIn('id', [$tour->id])
    ->orderByRaw('RAND()')
    ->take(4)
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
    return view('frontend.calender')->withJan($Jan) ->withFeb($Feb)->withMar($Mar)
    ->withApr($Apr)->withMay($May)->withJun($Jun)
    ->withJul($Jul)->withAug($Aug)->withSep($Sep)
    ->withOct($Oct)->withNov($Nov)->withDec($Dec);
}

public function ajaxsearchdeparture(Request $request)
{
    $tour = Tour::find($request->tour_id);
    $departures = Departure::where('tour_id', '=', $request->tour_id)
    ->whereMonth('start', '=', $request->month)
    ->whereYear('start', '=', $request->year)
    ->get();

    return view('frontend.tour.partials.dates', compact('departures', 'tour'));
}

public function getPartner(){
    $medias = Partner::where('type',1)->get(); //media
    $accommodations = Partner::where('type',2)->get(); //accommodation
    $travels = Partner::where('type',3)->get(); //travel
    return view('frontend.pages.partners')
    ->withMedias($medias)
    ->withAccommodations($accommodations)
    ->withTravels($travels);
}
public function getSitemap(){
    return view('frontend.sitemap');
}

public function travelBlog(){
    $posts = Post::where('published',1)->get();
    return view('frontend.blog.index')->withPosts($posts);
}
 public function singlePost($slug)
 {
    $post = Post::where('slug','=', $slug)->firstOrFail();
     return view('frontend.blog.post')->withPost($post);
 }

 public function newHome()
 {
    $featureds = Tour::where('status',1)->where('featured',1)->take(6)->get();
    $categories = TourCategory::all();
    $carousels = Carousel::where('status' ,1)->get();
    $instaFeeds = Insta::orderByRaw('RAND()')->take(10)->get();
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
    ->withInstafeeds($instaFeeds)
    ->withPartners($partners)
    ->withOdds($oddDestinations)
    ->withEvens($evenDestinations);
     
 }

 public function newProduct()
 {
     return view('new.product.index');
 }

  public function newCategory()
 {
     return view('new.category');
 }

 public function newDestination()
 {
     return view('new.destination');
 } 

 public function newTravelstyle()
 {
     return view('new.travel-style');
 } 

 public function newPackages()
 {
     return view('new.packages');
 } 

 public function newAbout()
 {
     return view('new.about');
 } 

 public function newContact()
 {
     return view('new.contact');
 } 

 public function newEvents()
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

 public function newBlog()
 {
     return view('new.blog.index');
 }

 public function newPost()
 {
     return view('new.blog.post');
 }

 public function newStep1()
 {
     return view('new.product.booking.1');
 }

 public function newStep2()
 {
return view('new.product.booking.2');
 }

 public function newStep3()
 {
return view('new.product.booking.3');
 }

}
