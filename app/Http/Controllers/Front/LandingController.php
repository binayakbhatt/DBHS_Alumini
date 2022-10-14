<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function latestNews(){
        $latest_news= News::latest()->first();
        return view('landing', compact('latest_news'));
    }
}
