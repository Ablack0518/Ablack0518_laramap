<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Requests\ValidateFormRequest;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::get();
        //dd($events);
        $time = $this->time();
        return view('events.index', compact('events', 'time'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = new Event;
        $time = $this->time();
        return view('events.create', compact('event', 'time'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateFormRequest $request)
    {
        // validation is maked by the ValidateFormRequest
        Event::create(['title' => $request->title, 'content' => $request->content]);
        flashy('Your event has been created');
        return redirect()->route('path_admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $time = $this->time();
        return view('events.edit', compact('event', 'time'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidateFormRequest $request, Event $event)
    {
        // validation is maked by the ValidateFormRequest
        $event->update(['title' => $request->title, 'content' => $request->content,]);
        Flashy::primary('Your event is updating succesfuly');
        return redirect()->route('path_admin', $event);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        flashy('event' . $event->title . 'is deleted');
        return redirect()->route('path_admin');
    }

    function admin()
    {
        $events = Event::get();
        return view('events.admin', compact('events'));
    }

    //A la place de cette function, on a use le routing binding
    private function findEvent($id)
    {
        return Event::findOrfail($id);
    }

    private function time()
    {
        $temps = microtime(True);
        $time = round(microtime(true) - $temps, 5);
        return  $time;
    }
}