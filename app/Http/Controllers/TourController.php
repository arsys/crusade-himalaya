<?php

namespace App\Http\Controllers;

use App\Tour;
use App\Difficulty;
use App\Group;
use App\TourCategory;
use App\Region;
use App\Meal;
use App\Accommodation;
use App\Included;
use App\Excluded;
use App\Media;
use App\FeaturedImage;
use App\UploadImage;
use Illuminate\Http\Request;
use Session;
use File;
class TourController extends Controller
{
    private $banner = 'uploads/tour/';
    private $thumb = 'uploads/tour/thumb/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tour = Tour::all();
        return view('backend.tour.index')->withTours($tour);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $difficulties = Difficulty::all();
        $groups = Group::all();
        $categories = TourCategory::all();
        $regions = Region::all();
        $accommodations = Accommodation::all();
        $meals = Meal::all();
        $includes = Included::all();
        $excludes = Excluded::all();
        $images = Media::all();
        return view('backend.tour.create')
        ->withDifficulties($difficulties)
        ->withGroups($groups)
        ->withCategories($categories)
        ->withRegions($regions)
        ->withaccommodations($accommodations)
        ->withMeals($meals)
        ->withIncludes($includes)
        ->withExcludes($excludes)
        ->withImages($images);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        try {
            $this->validate($request, [
                'title' => 'required|max:255',
                'days' => 'required|numeric|max:90',
                'price' => 'required|numeric',
                'elevation' => 'required|numeric',
                'difficulty' => 'required',
                'group' => 'required',
                'region' => 'sometimes',
                'accommodation' => 'required',
                'meal' => 'required',
                'includes'  => 'required|array|min:1',
                'excludes'  => 'required|array|min:1',
                'featured' => 'required',
                'status' => 'required',
                'overview' => 'required',
                'mtitle' => 'required',
                'description' => 'required'
            ]);

            $tour = new Tour;
            $tour->title = $request->title;
            $tour->days = $request->days;
            $tour->price = $request->price;
            $tour->elevation = $request->elevation;
            $tour->difficulty_id = $request->difficulty;
            $tour->group_id = $request->group;

            $tour->category_id = $request->category;

            if (!empty($request->region)) {
                $tour->region_id = $request->region;
            }
            $tour->accommodation_id = $request->accommodation;
            $tour->meal_id = $request->meal;

            $tour->status = $request->status;
            $tour->overview = $request->overview;
            $tour->mtitle = $request->mtitle;
            $tour->description = $request->description;

            $tour->save();
            // dd($request->excludes);
            if (isset($request->includes) ) {
                $tour->includes()->sync($request->includes, false);
            }

            if (isset($request->excludes)) {
                $tour->excludes()->sync($request->excludes, false);
            }
            if (! File::exists($this->banner) || ! File::exists($this->thumb)) {
                File::makeDirectory($this->banner,0775, true);
                File::makeDirectory($this->thumb,0775, true);
            }
            $media = Media::find($request->featured);
            $upload = new UploadImage;
            $bannerPath = $upload->uploadSingle($this->banner, $media->path, 1024,512);
            $thumbPath = $upload->uploadSingle($this->thumb, $media->path, 400,300);
            // dd($thumbPath);
            $tour->image()->save(new FeaturedImage([
                'banner' => $bannerPath,
                'thumb' => $thumbPath
            ]));

        } catch (QueryException $e) {
            DB::rollback();
            Session::flash('success', $e->getMessage());
        }
        Session::flash('success', 'Tour created sucessfully !');
        return redirect()->route('tour.show', $tour->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        return view('backend.tour.show')->withTour($tour);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        $difficulties = Difficulty::all();
        $groups = Group::all();
        $categories = TourCategory::all();
        $regions = Region::all();
        $accommodations = Accommodation::all();
        $meals = Meal::all();
        $includes = Included::all();
        $excludes = Excluded::all();
        $images = Media::all();
        return view('backend.tour.edit')
        ->withTour($tour)
        ->withDifficulties($difficulties)
        ->withGroups($groups)
        ->withCategories($categories)
        ->withRegions($regions)
        ->withaccommodations($accommodations)
        ->withMeals($meals)
        ->withIncludes($includes)
        ->withExcludes($excludes)
        ->withImages($images);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
        // dd($request->all());
        try {
            $this->validate($request, [
                'title' => 'required|max:255',
                'days' => 'required|numeric|max:90',
                'price' => 'required|numeric',
                'elevation' => 'required|numeric',
                'difficulty' => 'required',
                'group' => 'required',
                'region' => 'sometimes',
                'accommodation' => 'required',
                'meal' => 'required',
                'includes'  => 'required|array|min:1',
                'excludes'  => 'required|array|min:1',
                'featured' => 'sometimes',
                'status' => 'required',
                'overview' => 'required',
                'mtitle' => 'required',
                'description' => 'required',
                'featured' => 'required'
            ]);

            $tour->title = $request->title;
            $tour->days = $request->days;
            $tour->price = $request->price;
            $tour->elevation = $request->elevation;
            $tour->difficulty_id = $request->difficulty;
            $tour->group_id = $request->group;

            $tour->category_id = $request->category;

            if (!empty($request->region)) {
                $tour->region_id = $request->region;
            }
            $tour->accommodation_id = $request->accommodation;
            $tour->meal_id = $request->meal;

            $tour->status = $request->status;
            $tour->overview = $request->overview;
            $tour->mtitle = $request->mtitle;
            $tour->description = $request->description;

            $tour->save();
            // dd($request->excludes);
            if (isset($request->includes) ) {
                $tour->includes()->sync($request->includes);
            }

            if (isset($request->excludes)) {
                $tour->excludes()->sync($request->excludes);
            }
            if (! File::exists($this->banner) || ! File::exists($this->thumb)) {
                File::makeDirectory($this->banner,0775, true);
                File::makeDirectory($this->thumb,0775, true);
            }
            $oldBanner = $tour->image->banner;
            $oldThumb = $tour->image->thumb;
            $image = $tour->image;

            $media = Media::find($request->featured);
            // dd($media);
            $upload = new UploadImage;

            $image->banner = $upload->uploadSingle($this->banner, $media->path, 1024,512);
            $image->thumb = $upload->uploadSingle($this->thumb, $media->path, 400,300);

            $tour->image()->save($image);

            File::delete(public_path($oldBanner));
            File::delete(public_path($oldThumb));

        } catch (QueryException $e) {
            DB::rollback();
            Session::flash('success', $e->getMessage());
        }
        Session::flash('success', 'Tour created sucessfully !');
        return redirect()->route('tour.show',$tour->id);        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        // return($tour->image);
        foreach ($tour->departure as $departure) {
            $departure->delete();
        }
        if ($tour->image) {
            File::delete(public_path($tour->image->thumb));
            File::delete(public_path($tour->image->banner));
            $tour->image->delete();
        }

        if ($test = $tour->includes()->count() != null) {
            $tour->includes()->detach();
        }
        if ($test = $tour->excludes()->count() != null) {
            $tour->excludes()->detach();
        }
        
        $tour->delete();

        Session::flash('success', 'Tour deleted sucessfully !');
        return redirect()
        ->route('tour.index');        
    }

    public function publish($id)
    {
        $tour = Tour::find($id);
        $tour->status = 1;
        $tour->save();
        Session::flash('success', 'Tour set as published!');
        return redirect()
        ->route('tour.index');
    }

    public function unpublish($id)
    {
        $tour = Tour::find($id);
        $tour->status = 0;
        $tour->save();
        Session::flash('success', 'Tour set as published!');
        return redirect()
        ->route('tour.index');
    }

    public function featuredTours()
    {
        $tours = Tour::where('featured',1)->get();
        return view('backend.tour.featured')->withTours($tours);
    }
    
    public function setAsfeatured($id){
        $tour = Tour::find($id);
        $tour->featured = 1;
        $tour->save();

        Session::flash('success', 'Tour set as unpublished!');
        return redirect()
        ->route('tour.index');
    }

    public function removeAsfeatured($id)
    {
        $tour = Tour::find($id);
        $tour->status = 0;
        $tour->save();

        Session::flash('success', 'Tour removed from featured list sucessfully !');
        return redirect()
        ->route('tour.index');

    }    

    public function moveTotrash(Tour $tour)
    {
    	$tour->trash = 1;
    	$tour->save();
    	Session::flash('warning', 'Tour move to Trash !');
    	return redirect()->route('tour.index');
    }

    public function removeFromtrash(Tour $tour)
    {
    	$tour->trash = 0;
    	$tour->save();
    	Session::flash('info', 'Tour remove to Trash !');
    	return redirect()->route('tour.index');
    }    

    public function viewTrash()
    {
        $tours = Tour::where('trash','=', 1)->get();
        return view('backend.tour.trash')->withTours($tours);
    }

}
