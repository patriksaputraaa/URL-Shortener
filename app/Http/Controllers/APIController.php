<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class APIController extends Controller
{
    public $api_url = "http://127.0.0.1:5500";

    public function searchLink(Request $request){
        $keywords = $request->input('keyword');
        $link = Link::where('long_url', 'LIKE', "%$keywords%")->get();
        if($link->isEmpty()){
            return response()->json([
                'success'   => false,
                'data'      => 'Data not found'
            ], 200)->header('Access-Control-Allow-Origin', $this->api_url);
        }else{
            return response()->json([
                'success'   => true,
                'data'      => $link
            ], 200)->header('Access-Control-Allow-Origin', $this->api_url);
        }
    }
}
