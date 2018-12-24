<?php

namespace App\Http\Controllers;

use App\Media;
use Session;
use File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    private $path = "uploads/images/media/";
    private $thumb = "uploads/images/media/thumb/";
    public function __construct()
    {
        if (!is_dir($this->path) && !is_dir($this->thumb)) {
            mkdir($this->path, 0755, true);
            mkdir($this->thumb, 0755, true);
        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = new Media;
        $images = $count->countImages($this->path);
        $thumbs = $count->countImages($this->thumb);
        $medias = Media::all();
        return view('backend.media.index')
        ->withMedias($medias)
        ->withImages($images)
        ->withThumbs($thumbs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.media.create');
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
            'photo' => 'max:15000'
        ]);
        // if (!is_dir($this->path) && !is_dir($this->thumb)) {
        //     mkdir($this->path, 0755, true);
        //     mkdir($this->thumb, 0755, true);
        // }
        $media = new Media;

        $paths = Media::uploadImage($this->path,$this->thumb,$request->file('photo'));
        $media->path = $paths[0];
        $media->thumb = $paths[1];
        $media->save();
        Session::flash('success', 'New media item added sucessfully.');
        return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media = Media::findOrFail($id);
        File::delete(public_path($media->path));
        File::delete(public_path($media->thumb));
        $media->delete();
        return response()->json($media);
    }

    public function clearUnwanted()
    {
        $medias = Media::all();
        $files =File::allFiles(public_path($this->thumb));
        foreach($files as $file)
        {
            // dd($this->path.'/'.$file->getRelativePathname());
            foreach ($medias as $media) 
            {          
                if($file->getRelativePathname() != basename($media->path))
                {
                    File::delete(public_path($this->path.'/'.$file->getRelativePathname()));
                    File::delete(public_path($this->thumb.'/'.$file->getRelativePathname()));
                } 
            }
        }
        return back();
    }


}
