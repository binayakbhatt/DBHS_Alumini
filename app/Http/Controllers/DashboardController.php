<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function display_count(){
        $news = News::count();

        return view('dashboard', compact('news'));
    }
}