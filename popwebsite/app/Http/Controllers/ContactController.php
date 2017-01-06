<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\View;

class ContactController extends Controller
{
    public function add(Request $request){
    	$contact = new Contact;
    	$contact->name = $request['name'];
    	$contact->email = $request['email'];
    	$contact->phone = $request['phone'];
    	$contact->comment = $request['comment'];
    	$isSaved = $contact->saved();
        if ($isSaved) {
           return Redirect::to('/admin/contact')->withInput(
            $request->session()->flash('alert-success', 'We have recieved your request')
            );
        }
        else {
           return Redirect::to('/admin/contact')->withInput(
            $request->session()->flash('alert-failure', 'An error occurred while sending your details please try again')
            );
        }
    }
    public function addsec(){
        $contact = new Contact;
        $contact->name = 'name';
        $contact->email = 'email';
        $contact->phone ='0814';
        $contact->address = 'address';
        $isSaved = $contact->saved();
    }
    public function editGet($id){
        $contact = Contact::find($id)->first(); 
        return view('admin.contact')->with('contact', $contact);
    }
    public function editPost(Request $request){
        $id = $request['id'];
    	$contact = Contact::find($id);
    	$contact->name = $request['name'];
    	$contact->email = $request['email'];
    	$contact->phone = $request['phone'];
    	$contact->address = $request['address'];
    	$isSaved = $contact->save();
        if ($isSaved) {
           return Redirect::to('/admin/contact/update/'.$id)->withInput(
            $request->session()->flash('alert-success', 'updated.....')
            );
        }
        else {
           return Redirect::to('/admin/contact/update/'.$id)->withInput(
            $request->session()->flash('alert-failure', 'update failure')
            );
        }
    }
    public function truncate($id){
    	$contact = Contact::find($id);
    	$contact->truncate();
    }
    public function show(){
    	$contact = Contact::find(1)->first();
    	// return $contact;
    	return view('contact')->with('contact', $contact);
    }

    public function contactIndex(){
        $contact = Contact::all();
        return view('admin.contact_index')->with('contact', $contact);
    }

    public function view(){
        $contact = Contact::first();
        return $contact;
    }

}
