<?php

namespace App\Http\Controllers;

use App\Setting;
use Session;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact= Setting::first();
        if ( is_null($contact))
        {
            return view('backend.setting.create');
        }
        else{
            return view('backend.setting.edit')->withContact($contact);
        }
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
        $setting = Setting::all();
        if ($setting->count() < 1) {
            try{
                $contact = new Setting;
                $contact->site_name = $request->site_name;
                $contact->tagline = $request->tagline;
                $contact->address = $request->address;
                $contact->city = $request->city;
                $contact->phone = $request->phone;
                $contact->website = $request->website;
                $contact->facebook = $request->facebook;
                $contact->twitter = $request->twitter;
                $contact->instagram = $request->instagram;
                $contact->googleplus = $request->googleplus;
                $contact->youtube = $request->youtube;
                $contact->whats_app = $request->whats_app;
                $contact->map = $request->map;
                $contact->gtag = $request->gtag;
                $contact->save();
                Session::flash('info', 'Infos added sucessfully !');
            }
            catch (QueryException $e)
            {
                Session::flash('danger', $e->getMessage());
            }
        }
        return redirect()->route('setting.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        try {
            $setting->site_name = $request->site_name;
            $setting->tagline = $request->tagline;
            $setting->address = $request->address;
            $setting->city = $request->city;
            $setting->phone = $request->phone;
            $setting->website = $request->website;
            $setting->facebook = $request->facebook;
            $setting->twitter = $request->twitter;
            $setting->instagram = $request->instagram;
            $setting->googleplus = $request->googleplus;
            $setting->youtube = $request->youtube;
            $setting->whats_app = $request->whats_app;
            $setting->map = $request->map;
            $setting->gtag = $request->gtag;
            $setting->save();

            Session::flash('success', 'Settings savedsucessfully !');
        } catch (QueryException $e) {
            return $e->getMessage();
        }

        return redirect()->route('setting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
