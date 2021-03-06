<?php

namespace App\Http\Controllers;

use App\Carousel;
use File;
use Session;
use Image;
use ImageOptimizer;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    private $path = "uploads/carousel/";
    public function __construct()
    {
        if (!is_dir($this->path) ) {
            mkdir($this->path, 0755, true);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousels = Carousel::all();
        return view('backend.carousel.index')->withCarousels($carousels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|mimes:jpg,jpeg|max:10000'
        ]);

        $carousels = new Carousel;

        $file = $request->file('photo');
        $name = md5(now().$file->getClientOriginalName()).'.' .$file->getClientOriginalExtension();
        // if (!is_dir($this->path)) {
        //     mkdir($this->path, 0755, true);
        // }
        $file->move($this->path, $name);
        ImageOptimizer::optimize($this->path.'/'.$name);
        $carousels->create(['path'=> $this->path.'/'.$name]);
        return 'Done';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function show(Carousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousel $carousel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carousel $carousel)
    {
        $this->validate($request, [
            'name' => 'required|max:244'
        ]);
        $carousel = Carousel::find($request->id);
        $carousel->name = $request->name;
        $carousel->header = $request->title;
        $carousel->subheader = $request->subtitle;

        $carousel->save();

        return response()->json($carousel);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel = Carousel::findOrFail($id);
        File::delete(public_path($carousel->path));
        $carousel->delete();
        return response()->json($carousel);
    }

    public function publish($id)
    {
        $carousel = Carousel::find($id);
        $carousel->status =1;
        $carousel->save();
        return redirect()->route('carousel.index');
    }

    public function unpublish($id)
    {
        $carousel = Carousel::find($id);
        $carousel->status = 0;
        $carousel->save();
        return redirect()->route('carousel.index');
    }

}
