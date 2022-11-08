<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function getAlumni(){
       $alumni = User::where('user_type', '=', 'Alumnus')->orderBy('batch')->paginate(10);
        return view ('front.alumni', compact('alumni'));

    }

    public function alumni_detail($id){
        $alumni_detail = User::where('id', $id)->first();
         return view ('front.alumni-detail', compact('alumni_detail'));
    }
}
