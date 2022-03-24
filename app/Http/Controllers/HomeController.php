<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('front.index');
    }

    public function index_page(){
        return view('front.home');
    }

    public function contact_us(){
        return view('front.contact-us');
    }

    public function services(){
        return view('front.services');
    }

    public function work(){
        return view('front.work');
    }

    public function about_us(){
        return view('front.about');
    }

    public function team(){
        return view('front.team');
    }




}
