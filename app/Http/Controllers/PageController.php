<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(){
        return view("dashboard", ["key" => "Dashboard"]);
    }

    public function links(){
        return view("links", ["key" => "Links"]);
    }

    public function homepage(){
        return view("homepage", ["key" => "Homepage"]);
    }

    public function analytics(){
        return view("analytics", ["key" => "Analytics"]);
    }

    public function settings(){
        return view("settings", ["key" => "Settings"]);
    }


    public function books(){
        return view("books");
    }
}
