<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
   
    
    public function update(ProfileUpdateRequest $request){

    
        // if($request->hasFile('image')){
        // $extension = $request->file('image')->extension();
        // $image_name = date('dmYHis').'.'.$extension;
        // $request->file('image')->move(public_path('images/profile/'),$image_name);
        // $request->image = $image_name;
        // }
        
        
       
        $batch = $request->input('batch');
        $mobile = $request->input('mobile');
        $occupation = $request->input('occupation');
        $dob =$request->input('dob');
       // $image = $request->image;
        $current_residence =  $request->input('current_residence');
        $city =  $request->input('city');
        $state =  $request->input('state');
        $country =  $request->input('country');
        $pincode =  $request->input('pin_code');
        $aboutme =  $request->input('aboutme');

       

       $updated= auth()->user()->update([
            'batch'=> $batch,
            'mobile' => $mobile,
            //'image' => $image,
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

    public function passwordUpdate(Request $request){

        $request->validate([
            'password'=> 'required|min:8|confirmed'
        ]);
        $updated= auth()->user()->update([
           'password' =>bcrypt($request->password), ]);

        return redirect()->route('change-password')->with('success', 'Password changed successfully');

    }

    public function changeProfilepic(Request $request){

        $request->validate(
            [
                'image' => 'image|mimes:png,jpg|max:2048|nullable',
            ]
        );


        if($request->hasFile('image')){
            $extension = $request->file('image')->extension();
            $image_name = date('dmYHis').'.'.$extension;
            $request->file('image')->move(public_path('images/profile/'),$image_name);
            $request->image = $image_name;
        }
    
   
        $updated= auth()->user()->update([
            'image' => $request->image,
        ]);

        return redirect()->route('profile-pic')->with('success', 'Profile Pic changed successfully');




    }
    
}
