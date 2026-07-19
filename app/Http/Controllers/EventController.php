<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
    {
        $events = DB::table('events')->paginate(5);
        return view('informasi',["events"=>$events]);
    }
    
    public function view()
    {
        return view('admin.event.addevent');
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        //dd($request);
        $validatedData = $request->validate([
            'title'=>'required',
            'days'=>'required',
            'startTime'=>'required',
            'endTime'=>'required',
            'speaker'=>'required',
            'detail'=>'required',
            'date'=>'required',
            'image'=>'required|image'
        ]);

        

        $validatedData['image'] = $request->file('image')->store('eventImage');
       
        
        Event::create($validatedData);

        
        return redirect('/admin/event');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        $events = DB::table('events')->paginate(5);
        return view('admin/event/show',["events"=>$events]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $event = Event::where('id', $id)->first();
        return view('admin.event.editEvent', ['event'=>$event]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $event = Event::findOrFail($id);

        $event->update([
            'title'=>$request->title,
            'days'=>$request->days,
            'startTime'=>$request->startTime,
            'endTime'=>$request->endTime,
            'speaker'=>$request->speaker,
            'detail'=>$request->detail,
            'date'=>$request->date,
            'image'=>$request->image,
        ]);

        return redirect()->route('event.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jemaat = Event::findOrFail($id);

        $jemaat->delete();
            
        return redirect()->route('event.show');
        
    }
}
