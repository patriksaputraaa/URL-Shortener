<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(){
        return view("dashboard", ["key" => "Dashboard"]);
    }

    public function links(){
        // $links = Link::all();
        $links = Link::orderBy('created_at', 'desc')->get();
        // dd($links);
        return view("links", ["key" => "Links", "links" => $links]);
    }

    public function getLinks(){
        $links = Link::all();
        return $links;
    }

    public function saveLink(Request $request){
        Link::create([
            'short_url' => 'duwa.id/' . $request->short_url,
            'long_url' => $request->longUrl,
            'expires_at' => now()->addDays(30),
            'user_id' => auth()->id(),
        ]);

        return redirect('/links')->with('alert', 'Data berhasil disimpan');
    }

    public function addLink(){
        $longUrl = request('long_url');
        return view("addLink", ["key"  => "link", "longUrl" => $longUrl]);
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

    public function login(){
        return view("login", ["key" => "Login"]);
    }
}
