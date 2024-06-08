<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function editProfile(){
        return view('settings');
    }

    public function updateProfile(Request $request){
        $user = User::find(Auth::user()->id);
        $user->username = $request->username;
        $user->email = $request->email;
        if($request->avatar){
            if($user->avatar){
                Storage::disk('public')->delete($user->avatar);
            }
            $file_name = Auth::user()->id . '-' . $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->storeAs('avatars', $file_name, 'public');
            $user->avatar = $file_name;
        }
        $user->save();
        return redirect('/settings')->with('alert', 'Data berhasil diubah');
    }

    public function changePassword(){
        return view('editPassword', ["key" => ""]);
    }

    public function updatePassword(Request $request){
        $user = User::find(Auth::user()->id);
        if($request->newpassword != $request->confirmpassword){
            return redirect('/password')->with('alert', 'Password tidak cocok');
        }else{
            $user->password = bcrypt($request->newpassword);
            // dd($user);
            $user->save();
            return redirect('/settings')->with('alert', 'Password berhasil diubah');
        }
    }
}
