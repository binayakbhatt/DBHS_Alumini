<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\News;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   
  
    public function display_count(){
        $this->authorize('admin');
        $news = News::count();
        $event =Event::count();

        return view('dashboard', compact('news', 'event'));
    }
}
