<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home_0299");
    }

    public function artikel(){
        return view("artikel_0299");
    }
    public function contact(){
        return view("contact_0299");
    }
}
