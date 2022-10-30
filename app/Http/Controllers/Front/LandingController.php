<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\News;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    
   

    public function latest(){
        $latest_news= News::latest()->first();
        $latest_event = Event::latest()->first();
        return view('landing', compact('latest_news', 'latest_event'));
    }
}
