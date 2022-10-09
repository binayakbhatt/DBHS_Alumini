<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function list(){
        $news = News::latest()->get();
        
        return view('front.news', compact('news'));

    }
    public function news_detail($slug){
        $news_detail = News::where('slug', $slug)->first();
        return view('front.news-detail', compact('news_detail'));
    }
}
