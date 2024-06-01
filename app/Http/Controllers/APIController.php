<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class APIController extends Controller
{
    public function searchLink(Request $request){
        $keywords = $request->input('keyword');
        $link = Link::where('long_url', 'LIKE', "%$keywords%")->get();
        if($link->isEmpty()){
            return response()->json([
                'success'   => false,
                'data'      => 'Data not found'
            ], 200)->header('Access-Control-Allow-Origin', "http://127.0.0.1:5500");
        }else{
            return response()->json([
                'success'   => true,
                'data'      => $link
            ], 200)->header('Access-Control-Allow-Origin', "http://127.0.0.1:5500");
        }
    }
}
