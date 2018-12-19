<?php

namespace App\Http\Controllers;

use App\Group;
use Session;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::all();
        return view('backend.tour.group.index')
        ->withGroups($groups);
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
        $group = new Group();
        $group->name = $request->name;
        $group->save();
        Session::flash('success', 'New item added sucessfully.');
        return redirect()->route('group.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GroupSize  $groupSize
     * @return \Illuminate\Http\Response
     */
    public function show(GroupSize $groupSize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GroupSize  $groupSize
     * @return \Illuminate\Http\Response
     */
    public function edit(GroupSize $groupSize)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GroupSize  $groupSize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:244',
        ]);
        $group = Group::find($request->id);
        $group->name = $request->name;

        $group->save();

        return response()->json($group);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GroupSize  $groupSize
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group = Group::findOrFail($id);
        $group->delete();
        return response()->json($group);
    }
}
