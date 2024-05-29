<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage; <--- if we want to remove media

class PageController extends Controller
{
    public function dashboard(){
        return view("dashboard", ["key" => "Dashboard"]);
    }

    public function links(){
        $id = auth()->id();
        $links = Link::where('user_id', $id)->orderBy('created_at', 'desc')->get();
        return view("links", ["key" => "Links", "links" => $links]);
    }

    public function getLinks(){
        $links = Link::all();
        return $links;
    }

    public function saveLink(Request $request){
        Link::create([
            'short_url' => $request->short_url,
            'long_url' => $request->longUrl,
            'expires_at' => now()->addDays(30),
            'user_id' => auth()->id(),
        ]);

        return redirect('/links')->with('alert', 'Data berhasil disimpan');
    }

    public function addLink(){
        $longUrl = request('long_url');
        return view("addLink", ["key"  => "Add Link", "longUrl" => $longUrl]);
    }

    public function editLink($short_url){
        $link = Link::find($short_url);
        return view("editLink", ["key" => "Edit Link", "link" => $link]);
    }

    public function updateLink($short_url, Request $request){
        $link = Link::find($short_url);
        $link->short_url = $request->short_url;
        $link->long_url = $request->long_url;
        // if($request->avatar){
        //     if($link->avatar){
        //         Storage::delete($link->avatar);
        //     }
        //     $file_name = $request->file('avatar')->store('avatars');
        //     $link->avatar = $file_name;
        // }
        $link->save();
        return redirect('/links')->with('alert', 'Data berhasil diubah');
    }

    //delete --------------------------------------------------------------------------------------------
    public function deleteLink($short_url){
        $link = Link::find($short_url);
        $link->delete();
        return redirect('/links')->with('alert', 'Data berhasil dihapus');
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
