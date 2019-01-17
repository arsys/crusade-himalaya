<?php

namespace App\Http\Controllers;

use App\Team;
use App\UploadImage;
use App\Member;
use App\Media;
use File;
use Session;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    private $path = "uploads/avatar/";    
    public function __construct()
    {
        if (!is_dir($this->path)) {
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
        $teams = Team::all();
        return view('backend.team.index')
        ->withTeams($teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = Member::all();
        $images = Media::all();
        return view('backend.team.create')
        ->withMembers($members)
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
            'name' => 'required|max:255',
            'position' => 'required',
            'description' => 'required',
        ]);

        $team = new Team;
        $team->name = $request->name;
        $team->position = $request->position;
        $team->member_id = $request->member;
        $team->description = $request->description;


        $media = Media::find($request->avatar);
        $upload = new UploadImage;
        $bannerPath = $upload->uploadSingle($this->path, $media->path, 250,250);
        $team->avatar =  $bannerPath;
        $team->save();
        Session::flash('success', 'Team created sucessfully !');
    } catch (QueryException $e) {
        return $e->getMessage();
        DB::rollback();
        Session::flash('success', $e->getMessage());
        // Session::flash('danger', 'Failed to create new page.');
    }

    // return redirect()->route('team.show', $team->id);  
    return redirect()->route('team.show',$team->id);  
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('backend.team.show')->withTeam($team);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
     $members = Member::all();
     $images = Media::all();

     return view('backend.team.edit')->withTeam($team)
     ->withMembers($members)
     ->withImages($images);   
 }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
       try {
        $this->validate($request, [
            'name' => 'required|max:255',
            'position' => 'required',
            'description' => 'required',
        ]);

        $team->name = $request->name;
        $team->position = $request->position;
        $team->member_id = $request->member;
        $team->description = $request->description;

        if (isset($request->avatar)) {
            $media = Media::find($request->avatar);
            $upload = new UploadImage;
            $bannerPath = $upload->uploadSingle($this->path, $media->path, 250,250);
            $team->avatar =  $bannerPath;
        }

        $team->save();
        Session::flash('success', 'Team created sucessfully !');
    } catch (QueryException $e) {
        return $e->getMessage();
        DB::rollback();
        Session::flash('success', $e->getMessage());
        // Session::flash('danger', 'Failed to create new page.');
    }
    return redirect()->route('team.show', $team->id);  
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        File::delete(public_path($team->avatar));
        $team->delete();
        Session::flash('success', 'Deleted sucessfully !');
        return redirect()->route('team.index');
    }
}
