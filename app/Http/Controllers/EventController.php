<?php

namespace App\Http\Controllers;
use App\Event;
use App\Media;
use App\UploadImage;
use Calendar;
use Session;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private $thumb = 'uploads/event/';
    public function __construct()
    {
        if (!File::exists($this->thumb) ) {
            mkdir($this->thumb, 0755, true);
        }
        $this->medias = Media::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $events = Event::all();
        // return view('backend.event.index')
        // ->withEvents($events);

        $events = [];
        $data = Event::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#2196f3',
                        'url' => 'events/'.$value->id,
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('backend.event.index', compact('calendar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.event.create')->withMedias($medias);
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
                'url' => 'sometimes',
                'featured' => 'required'
            ]);            
            $event = new Event;
            $event->title = $request->title;
            $event->url = $request->url;
            $event->start_date = $request->start;
            $event->end_date = $request->end;

            if (isset($request->featured)) {
                $media = Media::find($request->featured);
                $upload = new UploadImage;
                $thumbPath = $upload->uploadSingle($this->thumb, $media->path, 400,300);
                $event->path = $thumbPath;
            }

            $event->save();
        } catch (Exception $e) {
            DB::rollback();
            Session::flash('success', $e->getMessage());            
        }
        Session::flash('success', 'Event added sucessfully.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('backend.event.show')->withEvent($event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $event = Event::find($request->id);
        $event->title = $request->title;
        $event->url = $request->url;
        $event->start_date = $request->start;
        $event->end_date = $request->end;

        $event->save();

        return response()->json($event);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        if ($event->path) {
            File::delete(public_path($eventthumb));
        }
        $event->destroy();
        Session::flash('success', 'Event deleted.');
        return redirect()->route('events.index');
    }
}
