<?php

namespace App\Http\Controllers;

use App\Region;
use App\Media;
use App\UploadImage;
use Illuminate\Http\Request;
use Session;
use File;
class RegionController extends Controller
{
    private $path = "uploads/images/region/";
    private $thumb = "uploads/images/region/thumb/";
    private $nav = "uploads/images/region/nav/";

    function __construct()
    {
        if (!File::exists($this->path) || !File::exists($this->thumb) || !File::exists($this->nav)) {
            File::makeDirectory($this->path);
            File::makeDirectory($this->thumb);
            File::makeDirectory($this->nav);
        }
        $this->medias = Media::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::all();
        return view('backend.tour.region.index')
        ->withImages($this->medias)
        ->withRegions($regions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:255'
        ));

        $region = new Region();
        $region->name = $request->name;
        $region->slug = str_slug($request->name, '-');
        $region->description = $request->description;
        $media = Media::find($request->featured);
        $UploadImage = new UploadImage;
        $path = $UploadImage->uploadSingle($this->path,$media->path,1024,512);
        $thumb = $UploadImage->uploadSingle($this->thumb,$media->path,800,400);
        $nav = $UploadImage->uploadSingle($this->nav,$media->path,300,2000);
        $region->path = $path;
        $region->thumb = $thumb;
        $region->nav = $nav;
        $region->save();
        Session::flash('success', 'New item added sucessfully.');
        return redirect()->route('regions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit(Region $region)
    {
        return view('backend.tour.region.edit')
        ->withRegion($region)
        ->withImages($this->medias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region)
    {
        $this->validate($request, [
            'name' => 'required|max:244',
            'featured' => 'sometimes'
        ]);
        
        $region->name = $request->name;
        $region->slug = str_slug($request->name, '-');
        $region->description = $request->description;
        if (!empty($request->featured)) {
            //fetch old image path
            $oldPath = $region->path;
            $oldThumb = $region->thumb;
            $oldNav = $region->nav;

            //assign new image path to objects
            $media = Media::find($request->featured);
            $UploadImage = new UploadImage;
            $path = $UploadImage->uploadSingle($this->path,$media->path,1024,512);
            $thumb = $UploadImage->uploadSingle($this->thumb,$media->path,800,400);
            $nav = $UploadImage->uploadSingle($this->nav,$media->path,300,2000);
            $region->path = $path;
            $region->thumb = $thumb;
            $region->nav = $nav;

            //delete old image
            File::delete(public_path($oldPath));
            File::delete(public_path($oldThumb));
            File::delete(public_path($oldNav));
        }
        $region->save();

        return redirect()->route('regions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $region = Region::findOrFail($id);
        File::delete(public_path($region->thumb));
        File::delete(public_path($region->nav));
        File::delete(public_path($region->path));
        $region->delete();
        return response()->json($region);
    }
}
