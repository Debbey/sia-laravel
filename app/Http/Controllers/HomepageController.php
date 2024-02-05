<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function home(){
        return view('homepage');
    }

    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }
}
