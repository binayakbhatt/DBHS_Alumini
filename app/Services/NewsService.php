<?php

namespace App\Services;

use App\Models\News;

class NewsService {

    public function getAllNews(){
        return News::latest()->get();
    }

    public function singleNews(){

    }

};