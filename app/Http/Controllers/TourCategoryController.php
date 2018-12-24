<?php

namespace App\Http\Controllers;

use App\TourCategory;
use App\Media;
use App\UploadImage;
use Session;
use File;
use Image;
use Illuminate\Http\Request;

class TourCategoryController extends Controller
{
    private $path = "uploads/images/tour-category/";
    private $thumb = "uploads/images/tour-category/thumb/";

    function __construct()
    {
        $this->medias = Media::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = TourCategory::all();        
        return view('backend.tour.category.index')
        ->withCategories($categories)
        ->withImages($this->medias);
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
        // dd($request->all());
        try {
            $this->validate($request, array(
                'name' => 'required|max:255',
                'featured' => 'required'
            ));
            $categories = new TourCategory;
            $categories->name = $request->name;
            if (!File::exists($this->path) || !File::exists($this->thumb)) {
                File::makeDirectory($this->path);
                File::makeDirectory($this->thumb);
            }
            
            $media = Media::find($request->featured);
            $uploadImage = new UploadImage;
            $path = $uploadImage->uploadSingle($this->path,$media->path,1024,512);
            $thumb = $uploadImage->uploadSingle($this->thumb,$media->path,320,480);
            $categories->path = $path;
            $categories->thumb = $thumb;

            $categories->save();
        } catch (QueryException $e) {
            DB::rollback();
            Session::flash('success', $e->getMessage());
        }
        Session::flash('success', 'New item added sucessfully.');
        return redirect()->route('tour-category.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\TourCategory  $tourCategory
     * @return \Illuminate\Http\Response
     */
    public function show(TourCategory $tourCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TourCategory  $tourCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(TourCategory $tourCategory)
    {
        return view('backend.tour.category.edit')
        ->withCategory($tourCategory)
        ->withImages($this->medias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TourCategory  $tourCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TourCategory $tourCategory)
    {
        $this->validate($request, [
            'name' => 'required|max:244',
            'featured' => 'sometimes'
        ]);

        $tourCategory->name = $request->name;
        if (!empty($request->featured)) {
            //fetch old image path
            $oldPath = $tourCategory->path;
            $oldThumb = $tourCategory->thumb;

            //assign new image path to objects
            $media = Media::find($request->featured);
            $UploadImage = new UploadImage;
            $path = $UploadImage->uploadSingle($this->path,$media->path,1024,512);
            $thumb = $UploadImage->uploadSingle($this->thumb,$media->path,320,480);
            $tourCategory->path = $path;
            $tourCategory->thumb = $thumb;

            //delete old image
            File::delete(public_path($oldPath));
            File::delete(public_path($oldThumb));
        }
        $tourCategory->save();

        return redirect()->route('tour-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TourCategory  $tourCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = TourCategory::findOrFail($id);
        File::delete(public_path($category->path));
        File::delete(public_path($category->thumb));
        $category->delete();
        return response()->json($category);
    }
}