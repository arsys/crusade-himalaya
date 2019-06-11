<?php

namespace App\Http\Controllers;

use App\Partner;
use App\UploadImage;
use Session;
use File;
use Image;
use ImageOptimizer;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    private $path = "uploads/images/partner";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        return view('backend.partner.index')->withPartners($partners);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.partner.create');
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
            'photo' => 'required|mimes:jpg,jpeg,png|max:10000'
        ]);

        $partner = new Partner;

        $file = $request->file('photo');
        $name = md5(now().$file->getClientOriginalName()).'.' .$file->getClientOriginalExtension();

        $file->move($this->path, $name);
        ImageOptimizer::optimize($this->path.'/'.$name);
        $partner->create([
            'path'=> $this->path.'/'.$name,
            'type'=>$request->type
            ]);
        return 'Done';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $this->validate($request, [
            'name' => 'required|max:244',
            'url' => 'required|max:244',
            'type' => 'required',
        ]);
        $partner = Partner::find($request->id);
        $partner->name = $request->name;
        $partner->url = $request->url;
        $partner->type = $request->type;

        $partner->save();

        return response()->json($partner);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        File::delete(public_path($partner->path));
        $partner->delete();
        return response()->json($partner);
    }
}
