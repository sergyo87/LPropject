<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function create(){
        return view('about.contact');
    }
    
    public function store(\App\Http\Requests\ContactFormRequest $request){
        
       /* Mail::send('emails.contact',
                array(
                    'name' => $request->name,
                    'email' => $request->email,
                    'user_message' => $request->message
                ), function($message){
                    $message->from('asdasd@asdad.com');
                    $message->to('asdasd@asdad.com', 'Admin')->subject('Feedback');
                }
                );*/
        
        return redirect('contact')->with('msg', 'Thank you for contacting us!');
    }
}
