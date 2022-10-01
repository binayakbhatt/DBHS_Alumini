<?php

use App\Http\Controllers\News\News;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>['auth', 'verified']], function(){
   
    Route::resource('news', News::class)->only(['index', 'create', 'store']);
});