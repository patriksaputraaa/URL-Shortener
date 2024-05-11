<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(){
        return view("dashboard", ["key" => "dashboard"]);
    }

    public function links(){
        return view("links", ["key" => "links"]);
    }
}
