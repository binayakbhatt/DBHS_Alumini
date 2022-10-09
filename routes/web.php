<?php

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

Route::get('/', function () {
    return view('landing');
});

Route::get('/newslist',[NewsController::class, 'list'])->name('front.news');
Route::get('/news-detail/{slug}',[NewsController::class, 'news_detail'])->name('front.news-detail');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::group(['middleware'=>['auth', 'verified']], function(){
    Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

    Route::view('profile', 'profile')->name('profile');
    Route::put('profile',[ProfileController::class,'update'])->name('profile.update');

});

require __DIR__.'/auth.php';
require __DIR__.'/news.php';
