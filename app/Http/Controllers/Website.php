<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class Website extends Controller
{
    public function index(){

        $data = ['name'=>"Rizwan",'data'=>"Hello Rizwan"];
        $user['to']='muhammadrizwanbrw@gmail.com';
        Mail::send('mail', $data, function($messages) use ($user){
            $messages->to($user['to']);
            //dd($messages);
            $messages->subject('Hello Intezar Hussain');

    });
 }
}
