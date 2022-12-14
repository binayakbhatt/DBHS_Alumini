<?php

use App\Http\Controllers\Alumni\AlumniController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Front\EventController;
use App\Http\Controllers\Front\LandingController;
use App\Http\Controllers\Front\NewsController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//front
Route::get('/', [LandingController::class, 'latest'])->name('landing');
Route::get('/newslist',[NewsController::class, 'list'])->name('front.news');
Route::get('/news-detail/{slug}',[NewsController::class, 'news_detail'])->name('front.news-detail');
Route::get('/alumni',[AlumniController::class, 'getAlumni'] )->name('front.alumni');
Route::get('/alumni-detail/{id}',[AlumniController::class, 'alumni_detail'])->name('front.alumni-detail');
Route::get('/eventlist',[EventController::class, 'event_list'])->name('front.event');
Route::get('/event-detail/{id}',[EventController::class, 'event_detail'])->name('front.event-detail');





//dashboard
Route::group(['middleware'=>['auth','verified']], function(){
Route::get('/dashboard',[DashboardController::class, 'display_count'] )->name('dashboard');

});
//profile
Route::group(['middleware'=>['auth','verified']], function(){
    
    Route::view('viewprofile', 'viewprofile')->name('viewprofile');
    Route::view('profile', 'profile')->name('profile');
    Route::put('profile',[ProfileController::class,'update'])->name('profile.update');
    Route::view('change-password', 'change-password')->name('change-password');
    Route::put('change-password', [ProfileController::class, 'passwordUpdate'])->name('password.change');
    Route::view('profile-pic', 'profile-pic')->name('profile-pic');
    Route::put('profile-pic', [ProfileController::class, 'changeProfilepic'])->name('profile.change');

});





require __DIR__.'/auth.php';
require __DIR__.'/news.php';
require __DIR__.'/events.php';
