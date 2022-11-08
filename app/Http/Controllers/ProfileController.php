<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(ProfileUpdateRequest $request){

    
        if($request->hasFile('image')){
        $extension = $request->file('image')->extension();
        $image_name = date('dmYHis').'.'.$extension;
        $request->file('image')->move(public_path('images/profile/'),$image_name);
        $request->image = $image_name;
        }
        
        
        //$password = $request->input('password');
        $batch = $request->input('batch');
        $mobile = $request->input('mobile');
        $occupation = $request->input('occupation');
        $dob =$request->input('dob');
        $image = $request->image;
        $current_residence =  $request->input('current_residence');
        $city =  $request->input('city');
        $state =  $request->input('state');
        $country =  $request->input('country');
        $pincode =  $request->input('pin_code');
        $aboutme =  $request->input('aboutme');

       

       $updated= auth()->user()->update([
           // 'password' =>bcrypt($password),
            'batch'=> $batch,
            'mobile' => $mobile,
            'image' => $image,
            'occupation'=> $occupation,
            'dob'=>$dob,
            'current_residence' => $current_residence,
            'city' => $city,
            'state' => $state,
            'country' => $country,
            'pin_code' => $pincode,
            'aboutme' => $aboutme, 
        ]);
 
        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }
    
}
