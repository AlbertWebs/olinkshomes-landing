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
}
