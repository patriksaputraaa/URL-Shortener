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
        $links = Link::orderBy('created_at', 'desc')->get();
        return view("links", ["key" => "Links", "links" => $links]);
    }

    public function getLinks(){
        $links = Link::all();
        return $links;
    }

    public function saveLink(Request $request){
        // $filename = time().'-'.$request->file('gambar')->getClientOriginalName();
        // $path = $request->file('gambar')->storeAs('images', $filename, 'public');
        // 'gambar' => $path;
        Link::create([
            'short_url' => $request->short_url,
            'long_url' => $request->long_url,
            'expires_at' => now(),
            'user_id' => 1,
        ]);

        return redirect('/links')->with('alert', 'Data berhasil disimpan');
    }

    public function addLink(){
        return view("addLink", ["key"  => "link"]);
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
