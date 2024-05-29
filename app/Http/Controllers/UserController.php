<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function editProfile(Request $request){
        $user = User::find(Auth::user()->id);
        if($request->hasFile('avatar')){
            if($user->avatar){
                Storage::delete($user->avatar);
            }
            $file_name = $request->file('avatar')->store('avatars');
            $user->avatar = $file_name;
        }
        $user->username = $request->username;
        $user->email = $request->email;
        $user->save();
        return redirect('/settings')->with('alert', 'Data berhasil diubah');
    }

}
