<?php


use App\Http\Controllers\News\NewsController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>['auth', 'can:admin']], function(){
   
    Route::resource('news', NewsController::class);
   // ->only(['index', 'create','store', 'edit', 'destroy', 'update']);

});