<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function sendEmail(){
        $data = array(
            'name' => "Learning Laravel",
        );

        Mail::send('emails.email', $data, function ($message) {

            $message->from('no-reply@sialumni.com', 'Learning Laravel Tes');

            $message->to('achmads123@yahoo.com')->subject('Learning Laravel test email');

        });

        return "Your email has been sent successfully";
    }


}
