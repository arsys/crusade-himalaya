<?php

namespace App\Http\Controllers;

use App\Page;
use App\Media;
use App\UploadImage;
use Session;
use File;
use Illuminate\Http\Request;

class PageController extends Controller
{
    private $banner = "uploads/page/";    
    public function __construct()
    {
        if (!is_dir($this->banner)) {
            mkdir($this->banner, 0755, true);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pages = Page::all();
        return view('backend.page.index')
        ->withPages($pages);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $images = Media::all();
        $pages = Page::all();
        return view('backend.page.create')
        ->withPages($pages)
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
            'page_content' => 'required',
            'position' => 'required|numeric',
            'mtitle' => 'required',
            'banner' => 'required',
            'description' => 'required',
        ]);

        $page = new Page;
        $page->title = $request->title;
        $page->position = $request->position;
        $page->main = $request->main;
        $page->status = $request->status;
        $page->page_content = $request->page_content;
        $page->mtitle = $request->mtitle;
        $page->description = $request->description;
        if (!empty($request->parent_id)) {
            $page->parent_id = $request->parent_id;
        }

        if (!File::exists($this->banner)) {
            File::makeDirectory($this->banner);
        }
        $media = Media::find($request->banner);
        $upload = new UploadImage;
        $bannerPath = $upload->uploadSingle($this->banner, $media->path, 1024,512);
        $page->banner =  $bannerPath;
        $page->save();
        Session::flash('success', 'Page created sucessfully !');
    } catch (QueryException $e) {
        return $e->getMessage();
        DB::rollback();
        Session::flash('success', $e->getMessage());
        // Session::flash('danger', 'Failed to create new page.');
    }

    return redirect()->route('pages.show', $page->id);     
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return view('backend.page.show')->withPage($page);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $pages = Page::all();
        $images = Media:: all();
        return view('backend.page.edit')->withPage($page)->withImages($images)->withPages($pages);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        // dd($resquest->all());
        try {
            $this->validate($request, [
                'title' => 'required|max:255',
                'page_content' => 'required',
                'position' => 'required|numeric',
                'mtitle' => 'required',
                'description' => 'required',
            ]);

            $page->title = $request->title;
            $page->position = $request->position;
            $page->main = $request->main;
            $page->status = $request->status;
            $page->page_content = $request->page_content;
            $page->mtitle = $request->mtitle;
            $page->description = $request->description;
            if (!empty($request->parent_id)) {
                $page->parent_id = $request->parent_id;
            }

            if (!File::exists($this->banner)) {
                File::makeDirectory($this->banner);
            }

            $oldBanner = $page->banner;
            
            if (isset($request->banner)) {
                $media = Media::find($request->banner);
                $upload = new UploadImage;
                $bannerPath = $upload->uploadSingle($this->banner, $media->path, 1024,512);
                $page->banner =  $bannerPath;
                File::delete(public_path($oldBanner));
            }

            $page->save();
            Session::flash('success', 'Page created sucessfully !');
        } catch (QueryException $e) {
            return $e->getMessage();
            DB::rollback();
            Session::flash('success', $e->getMessage());
        // Session::flash('danger', 'Failed to create new page.');
        }
        return redirect()->route('pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }

    public function publish($id)
    {
        $page = Page::find($id);
        $page->status = 1;
        $page->save();
        Session::flash('success', 'Page set as published!');
        return redirect()
        ->route('page.index');
    }

    public function unpublish($id)
    {
        $page = Page::find($id);
        $page->status = 0;
        $page->save();
        Session::flash('success', 'Page set as published!');
        return redirect()
        ->route('page.index');
    }
}
