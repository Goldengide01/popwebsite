<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\View;


class AboutController extends Controller
{
    //
    /*Add titles by their names*/
    public function add($title){
    	$about = new About();
    	$about->title = mysqli_escape_string($title);
    	$link = implode("-", explode(" ", $title));
    	$about->url = ($link);
    	$isSaved = $about->save();
    	if ($isSaved) {
    		return "Weldone Bravo".$title." added to the list";
    	}

    }


    public function editGet(){
    	$about = About::all();
    	return view('admin.about')->with('about', $about);

    }

    public function editPost(Request $request){
        //this method will still ne modified once I get hang of how to use AJAX properly
    	$id = $request['id'];
    	$about = About::find($id);
    	// $about->desc = $desc;
    	$about->desc = $request['desc'];
    	$isSaved = $about->save();
    	if ($isSaved) {
    		return "Weldone Bravo title with ".$id." editted on the list";
    	}

    }


    /*delete titles by their id*/
    public function del($id){
    	$about = About::find($id);
    	$isDeleted = $about->delete;
    	if ($isDeleted) {
    		return $title."is down. I repeat ".$title." is down";
    	}

    }
    /*show tsbout page*/
    public function index(){
    	$about = About::all();
    	// return $about;
    	return view('about')->with('about', $about);
    }
     public function truncate(){
    	$about = About::truncate();
    }

    public function view(){
    	$about = About::all();
    	return $about;
    }

}
