<?php

namespace App\Http\Controllers;
use App\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\View;

class MediaController extends Controller
{
    //
    public function addGet($code){
        $mediaCode = array('admin.adds.gallery', 'admin.adds.audio', 'admin.adds.video');
        return view($mediaCode[$code]);
    }
    public function editGet($code, $id){
        $media = Media::where('id', $id)->where('type', $code)->first();
        $mediaCode = array('admin.edits.gallery', 'admin.edits.audio', 'admin.edits.video');
        return view($mediaCode[$code])->with('media', $media);
    }
    public function view($id){
        $mediaCode = array('admin.views.gallery', 'admin.views.audio', 'admin.views.video');
        $media = Media::find($id)->first();
        return view($mediaCode[$code])->with('media', $media);
    }

    public function add(Request $request){
        $mediaType = array('Photo', 'Audio', 'Video');
    	$media = new Media;
    	$media->title = $request['title'];
    	$media->type = $request['mediaCode'];
        $media->desc = $request['desc'];
        $media->event_name = $request['event_name'];
        $nextId = $media->count() + 1;

        if ($media->type == 0) {
            $file = $request->file('photo');
            if ($request->hasFile('photo')) {
                $destinationPath = "uploads";
                if (!is_dir($destinationPath)) {
                    mkdir($destinationPath);
                }
                //look for something very randomn
                $filename = md5($nextId).".jpg";
                if ($file->isValid()) {
                    $file->move($destinationPath, $filename);
                }
                $media->url = $destinationPath."/".$filename;
            }
            else {
                return Redirect::to('/admin/media/add/'.$media->type)->withInput($request->session()->flash('alert-failure', "No photo was selected"));
            }
        }
        else {
           $media->url = $request['url'];
        }

        $isSaved = $media->save();
        if ($isSaved) {
            return Redirect::to('/admin/media')->withInput($request->session()->flash('alert-success', "A ".$mediaType[$media->type]." has been added"));
        }
        else{
            return Redirect::to('/admin/media/add/'.$media->type)->withInput($request->session()->flash('alert-failure', "Something is wrong"));
        }
    }
    public function editPost(Request $request){
        $mediaType = array('Photo', 'Audio', 'Video');
        $id = $request['id'];
        $media = Media::find($id);
        $media->title = $request['title'];
        $media->type = $request['mediaCode'];
        $media->desc = $request['desc'];
        $media->event_name = $request['event_name'];
        $nextId = $media->id + 1;

        if ($media->type == 0) {
            $file = $request->file('photo');
            if ($request->hasFile('photo')) {
                $destinationPath = "uploads";
                if (!is_dir($destinationPath)) {
                    mkdir($destinationPath);
                }
                //look for something very randomn
                $filename = md5($nextId).".jpg";
                if ($file->isValid()) {
                    $file->move($destinationPath, $filename);
                }
                $media->url = $destinationPath."/".$filename;
            }
            else {
                return Redirect::to('/admin/media/add/'.$media->type)->withInput($request->session()->flash('alert-failure', "No photo was selected"));
            }
        }
        else {
           $media->url = $request['url'];
        }

        $isSaved = $media->save();
        if ($isSaved) {
            return Redirect::to('/admin/media')
                            ->withInput($request->session()->flash('alert-success', "A ".$mediaType[$media->type]." has been added"));
        }
        else{
            return Redirect::to('/admin/media/add/'.$media->type)
                            ->withInput($request->session()->flash('alert-failure', "Something is wrong"));
        }
    }
    
     public function showcase() {
        $media = Media::all();
        return view('admin.indexes.media')->with('medias', $media);
    }
    public function media(){
        $audio = Media::where('type', '1');
        $video = Media::where('type', '2');
        return view('media')->with('audios', $audio)->with('videos', $video);
    }
    public function gallery(){
        $gallery = Media::where('type','0')
                        ->get();
        return view('gallery')->with('gallery', $gallery);
    }
    public function showVideosAndAudios(){}
    public function showPictures(){}
}
