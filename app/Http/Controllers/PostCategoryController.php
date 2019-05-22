<?php

namespace App\Http\Controllers;

use App\PostCategory;
use Illuminate\Http\Request;
use Session;
class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = PostCategory::all();
        return view('backend.blog.post.category.index')->withCategories($categories);
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
        $this->validate($request, [
            'title' => 'required|max:255',
        ]);
        $category = new PostCategory;
        $category->title = $request->title;
        $category->save();
        Session::flash('success', 'Category created sucessfully !');
        return redirect()->route('blog-post-category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PostCategory $postCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PostCategory $postCategory)
    {
        return view('backend.blog.post.category.edit')->withCategory($postCategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostCategory $postCategory)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
        ]);
        $postCategory->title = $request->title;
        $postCategory->save();
        Session::flash('success', 'Category updated sucessfully !');
        return redirect()->route('post-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postCategory = PostCategory::find($id);
        $postCategory->delete();
    }
}
