<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
use File;
use App\Media;
use App\UploadImage;
use App\PostCategory;

class BlogPostController extends Controller
{
    private $thumb = 'uploads/blog/';
    public function __construct()
    {
        if ( !File::exists($this->thumb)) {            
            mkdir($this->thumb, 0755, true);
        }
        $this->medias = Media::all();
        $this->categories = PostCategory::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('backend.blog.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.create')
        ->withImages($this->medias)
        ->withCategories($this->categories);
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
        $this->validate($request, [
            'title' => 'required|max:255',
            'postContent' => 'required',
            'mtitle' => 'required',
            'description' => 'required'
        ]);
        $post = new Post;
        $post->title = $request->title;
        $post->published = $request->published;
        $post->category_id = $request->category;
        $post->postContent = $request->postContent;
        $post->mtitle = $request->mtitle;
        $post->description = $request->description;

        $media = Media::find($request->featured);
        $upload = new UploadImage;
        $thumb = $upload->uploadSingle($this->thumb, $media->path, 1024,512);
        // dd($thumbPath);
        $post->thumb = $thumb;

        $post->save();
        Session::flash('success', 'Post created sucessfully !');
        return redirect()->route('blog-post.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $blogPostController
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('backend.blog.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $blogPostController
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('backend.blog.edit')
        ->withPost($post)
        ->withImages($this->medias)
        ->withCategories($this->categories);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $blogPostController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request, [
            'title' => 'required|max:255',
            'postContent' => 'required',
            'mtitle' => 'required',
            'description' => 'required'
        ]);
        $post = Post::find($id);
        $post->title = $request->title;
        $post->published = $request->published;
        $post->category_id = $request->category;
        $post->postContent = $request->postContent;
        $post->mtitle = $request->mtitle;
        $post->description = $request->description;

        if (!empty($request->featured)) {

            $oldThumb = $post->thumb;

            $media = Media::find($request->featured);
            $upload = new UploadImage;
            $thumb = $upload->uploadSingle($this->thumb, $media->path, 1024,512);
            $post->thumb = $thumb;
            File::delete(public_path($oldThumb));
        }


        $post->save();
        Session::flash('success', 'Post updated sucessfully !');
        return redirect()->route('blog-post.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $blogPostController
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        File::delete(public_path($post->thumb));
        $post->delete();
        Session::flash('success', 'Post deleted sucessfully !');
        return redirect()
        ->route('blog-post.index');
    }

    public function publish($id)
    {
        $post = Post::find($id);
        $post->published = 1;
        $post->save();
        Session::flash('success', 'Post set as published!');
        return redirect()
        ->route('blog-post.index');
    }

    public function unpublish($id)
    {
        $post = Post::find($id);
        $post->published = 0;
        $post->save();
        Session::flash('success', 'Post set as unpublished!');
        return redirect()
        ->route('blog-post.index');
    }
}
