<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\View;

class EventController extends Controller
{
    //
    public function index() {
    	return view('event');
    }

    public function showcase() {
    	$event = Event::all();
    	return view('admin.indexes.event')->with('events', $event);
    }
    public function view($id) {
    	$individual_event = Event::find($id)->first();
    	return view('admin.views.event')->with('event', $individual_event);
    }
    public function editGet($id) {
    	$event = Event::find($id);
    	return view('admin.edits.event')->with('event', $event->first());
    }

    public function editPost(Request $request) {
    	$id = $request['id'];
    	$event = Event::find($id);
    	$event->title = $request['title'];
    	$event->venue = $request['venue'];
        // $event->guests = $request['guests'];
        // $event->event_poster_url = "...";
        $file = $request->file('photo');
            if ($request->hasFile('photo')) {
                $destinationPath = "event_posters";
                if (!is_dir($destinationPath)) {
                    mkdir($destinationPath);
                }
                //look for something very randomn
                $filename = md5($nextId).".jpg";
                if ($file->isValid()) {
                    $file->move($destinationPath, $filename);
                }
                $event->event_poster_url = $destinationPath."/".$filename;
            }
            else {
                return Redirect::to('/admin/event/add')->withInput($request->session()->flash('alert-failure', "No photo was selected"));
            }
        // $event->host = $request['host'];
        $event->date_and_time = $request['date_and_time'];
        $event->desc = $request['desc'];
        $isSaved = $event->save();
    }

    public function addGet() {
        return view('admin.adds.event');
    }

    public function addPost(Request $request) {
        $event = new Event;
        $event->title = $request['title'];
        $event->venue = $request['venue'];
    	$event->ticket = false;
    	$event->no_of_ticket = 0;
        $nextId = $event->count() + 1;
        $file = $request->file('photo');
            if ($request->hasFile('photo')) {
                $destinationPath = "event_posters";
                if (!is_dir($destinationPath)) {
                    mkdir($destinationPath);
                }
                //look for something very randomn
                $filename = md5($nextId).".jpg";
                if ($file->isValid()) {
                    $file->move($destinationPath, $filename);
                }
                $event->event_poster_url = $destinationPath."/".$filename;
            }
            else {
                return Redirect::to('/admin/event/add')->withInput($request->session()->flash('alert-failure', "No photo was selected"));
            }
    	$event->guests = "Not implemented now because of time";
    	$event->host = "Not implemented now because of time";
        $event->date_and_time = $request['date_and_time'];
    	$event->desc = $request['desc'];
    	$isSaved = $event->save();
    	// return view('admin.adds.event')->with('events', $event);
    }
}