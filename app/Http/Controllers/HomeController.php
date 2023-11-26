<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view("home");
    }
    public function about(){
        return view("components.about");
    }
    public function portfolio(){
        return view("components.portfolio");
    }
    public function contact(){
        return view("components.contact");
    }
    public function blog(){
        return view("components.blog");
    }
}