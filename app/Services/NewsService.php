<?php

namespace App\Services;

use App\Models\News;

class NewsService {

    public function getAllNews(){
        return News::latest()->get();
    }

    public function singleNewsById($id){
        return $news_single = News::where('id', $id)->first();
    }

    public function singleNewsBySlug($slug){
        return $news_single = News::where('slug', $slug)->first();
    }


};