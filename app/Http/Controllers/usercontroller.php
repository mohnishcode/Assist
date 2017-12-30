<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
class usercontroller extends Controller
{
    public function profile()
    {
          $user=Auth::user();
        return view('profile',compact('user'));
    }
   
    public function update_avatar(Request $request)
    {
        
        if($request->hasFile('avatar'))
        {
            $avatar=$request->file('avatar');
            $filename= time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));
            $user=Auth::user();
            $user->avatar=$filename;
            $user->save();
        }
    
        return view('profile',array('user'=>Auth::user()));
    }


}
