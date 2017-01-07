<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\View;

class TeamController extends Controller
{
    //
    public function index() {
    	return view('team');
    }

    public function showcase() {
    	$team = Team::all();
    	return view('admin.indexes.team')->with('teams', $team);
    }
    public function view($id) {
    	$individual_team = Team::find($id)->first();
    	return view('admin.views.team')->with('team', $team);
    }
    public function editGet($id) {
    	$team = Team::find($id);
    	return view('admin.edits.team')->with('teams', $team->first());
    }

    public function editPost(Request $request) {
    	$id = $request['id'];
    	$team = Team::find($id);
    	$team->firstname = $request['firstname'];
    	$team->lastname = $request['lastname'];
        $nextId = $team->id + 1;
        $file = $request->file('photo');
            if ($request->hasFile('photo')) {
                $destinationPath = "team_member_photos";
                if (!is_dir($destinationPath)) {
                    mkdir($destinationPath);
                }
                //look for something very randomn
                $filename = md5($nextId).".jpg";
                if ($file->isValid()) {
                    $file->move($destinationPath, $filename);
                }
                $team->picture_url = $destinationPath."/".$filename;
            }
            else {
                return Redirect::to('/admin/team/add')->withInput($request->session()->flash('alert-failure', "No photo was selected"));
            }
    	$team->duty = $request['duty'];
    	$team->date_of_birth = $request['date_of_birth'];
    	$team->phone = $request['phone'];
        $team->email = $request['email'];
    	$team->about_me = $request['desc'];
    	$isSaved = $team->save();
    	// return view('admin.edits.team')->with('teams', $team);
    }

    public function addGet() {
    	return view('admin.adds.team');
    }

    public function addPost(Request $request) {
    	$team = new Team;
    	$team->firstname = $request['firstname'];
    	$team->lastname = $request['lastname'];
        $nextId = $team->count() + 1;
        $file = $request->file('photo');
            if ($request->hasFile('photo')) {
                $destinationPath = "team_member_photos";
                if (!is_dir($destinationPath)) {
                    mkdir($destinationPath);
                }
                //look for something very randomn
                $filename = md5($nextId).".jpg";
                if ($file->isValid()) {
                    $file->move($destinationPath, $filename);
                }
                $team->picture_url = $destinationPath."/".$filename;
            }
            else {
                return Redirect::to('/admin/team/add')->withInput($request->session()->flash('alert-failure', "No photo was selected"));
            }
    	$team->duty = $request['duty'];
    	$team->date_of_birth = $request['date_of_birth'];
        $team->phone = $request['phone'];
        $team->email = $request['email'];
        $team->about_me = $request['desc'];
    	$isSaved = $team->save();
    	// return view('admin.adds.team')->with('teams', $team);
    }
}
