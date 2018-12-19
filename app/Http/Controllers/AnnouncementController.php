<?php

namespace App\Http\Controllers;

use App\Announcement;
use Session;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcement = Announcement::all();
        return view('backend.announcement.index')->withAnnouncements($announcement);
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
        try {

            $announcement = new Announcement;
            $announcement->heading = $request->heading;
            $announcement->subheading = $request->subheading;
            $announcement->save();


        } catch (QueryException $e) {
            DB::rollback();
            Session::flash('success', $e->getMessage());
        }
        Session::flash('success', 'Announcement created sucessfully !');
        return redirect()->route('announcement.index');        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Announcement  $announcement
     * @return \Illuminate\Http\Response
 */
    public function show(Announcement $announcement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcement $announcement)
    {
        $announcement = Announcement::find($request->id);
        $announcement->heading = $request->heading;
        $announcement->subheading = $request->subheading;
        $announcement->save();
        return response()->json($announcement);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        $announcement->delete();
        return redirect()->route('announcement.index');
    }
}
