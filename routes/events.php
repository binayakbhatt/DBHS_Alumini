<?php

use App\Http\Controllers\Event\EventController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>['auth', 'verified']], function(){
   
    Route::resource('events', EventController::class);

});