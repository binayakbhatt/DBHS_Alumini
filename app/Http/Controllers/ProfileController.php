<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(ProfileUpdateRequest $request){

        $password = $request->input('password');
       

       $updated= auth()->user()->update([
            'password' =>bcrypt($password)
        ]);
 
        return redirect()->route('profile')->with('success', 'Password updated successfully');
    }
    
}
