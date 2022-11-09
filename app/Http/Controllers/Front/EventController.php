<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event_list(){
        $events = Event::latest()->paginate(10);
        return view('front.event', compact('events'));
    }
    
    public function event_detail($slug){
        $event_detail = Event::where('slug', $slug)->first();
        return view('front.event-detail', compact('event_detail'));
    }
}
