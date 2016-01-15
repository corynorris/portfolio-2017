<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function create(){
    	return view('contact');
    }

    public function store(ContactFormRequest $request) {
 		\Mail::send('emails.contact',
	        array(
	            'name' => $request->get('name'),
	            'email' => $request->get('email'),
	            'user_message' => $request->get('message')
	        ), function($message) {
		        $message->from('contact@corynorris.me');
		        $message->to('corynorris@gmail.com', 'Admin')->subject('Personal Portfolio Feedback');
	    	});
    	 return \Redirect::route('contact')->with('message', 'Thanks for contacting me!');
    }
}
