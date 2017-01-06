<?php

namespace App\Http\Controllers;

use App\Connect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\View;

class ConnectController extends Controller
{
    //
    public function add($title){
    	$connect = new Connect();
    	$connect->title = $title;
    	$connect->url = "#".mysqli_escape_string($title);
    	$isSaved = $connect->save();
    	if ($isSaved) {
    		return "Weldone Bravo".$title." added to the list";
    	}

    }


    public function edit(Request request, $id){
    	$connect = Connect::find($id);
    	// $connect->desc = $desc;
    	$connect->desc = $request['desc'];
    	$isSaved = $connect->save();
    	if ($isSaved) {
    		return "Weldone Bravo title with ".$id." editted on the list";
    	}

    }

    /*delete titles by their id*/
    public function del($id){
    	$connect = Connect::find($id);
    	$isDeleted = $connect->delete;
    	if ($isDeleted) {
    		return $title."is down. I repeat ".$title." is down";
    	}

    }
    /*show tsbout page*/
    public function index(){
    	$connect = Connect::all();
    	// return $connect;
    	return view('connect')->with('connect', $connect);

    }

     public function truncate(){
    	$connect = Connect::truncate();
    }
}
