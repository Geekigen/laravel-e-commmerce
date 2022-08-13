<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\cartcontroller;
use App\Http\Controllers\digimart;
use App\Http\Controllers\messagecontroller;
use App\Http\Controllers\pagescontroller;
use App\Http\Controllers\ratingcontroller;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',[pagescontroller::class,'index']);
Auth::routes(['verify'=> true]);



// middlewares admin
Route::middleware(['auth', 'admin'])->group(function () {
Route::get('/order/{id}',[pagescontroller::class,'ordershow']);
    Route::resource('/digimart',digimart::class)->only(['create','update','delete']);
Route::get('/admin',[pagescontroller::class,'admin']);

});

Route::middleware(['auth'])->group(function () {
 Route::get('/rate', [ratingcontroller::class, 'rate'])->name('rate');
Route::get('/checkout',[cartcontroller::class, 'check']);
Route::get('/check',[cartcontroller::class, 'wishlist']);
Route::post('/payment',[cartcontroller::class,'checkout']);
Route::get('/newsletter',[pagescontroller::class,'newsletter']);
Route::get('/message',[messagecontroller::class,'message']);
});

Route::resource('/digimart',digimart::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/cart',[cartcontroller::class,'cart']);
Route::get('cart', [cartcontroller::class, 'cart']);
Route::get('/add-to-cart/{id}',[cartcontroller::class, 'addToCart']);
Route::patch('/update-cart',[cartcontroller::class, 'update']);
Route::delete('/remove-from-cart',[cartcontroller::class, 'remove']);
// auth redirects
Route::get('/login/github', 'App\Http\Controllers\Auth\LoginController@gitredirect');
Route::get('/auth/github/callback', 'App\Http\Controllers\Auth\LoginController@gitCallback');

Route::get('/login/google', 'App\Http\Controllers\Auth\LoginController@googleredirect');
Route::get('/auth/google/callback', 'App\Http\Controllers\Auth\LoginController@googleCallback');

// pages
Route::get('/search',[pagescontroller::class,'search']);
Route::get('/all',[pagescontroller::class,'all']);
//Route::get('/reseller',[pagescontroller::class,'reseller']);

// sorting
Route::get('/low',[pagescontroller::class,'low']);
Route::get('/high',[pagescontroller::class,'high']);
Route::get('/recent',[pagescontroller::class,'recent']);
Route::get('/alllaptops',[pagescontroller::class,'alllaptops']);
Route::get('/corei7',[pagescontroller::class,'corei7']);
Route::get('/corei5',[pagescontroller::class,'corei5']);
Route::get('/corei3',[pagescontroller::class,'corei3']);
Route::get('/celeron',[pagescontroller::class,'celeron']);
Route::get('/amd',[pagescontroller::class,'amd']);
Route::get('/touch',[pagescontroller::class,'touch']);
Route::get('/tablet',[pagescontroller::class,'tablet']);
Route::get('/backlit',[pagescontroller::class,'backlit']);
Route::get('/dell',[pagescontroller::class,'dell']);
Route::get('/hp',[pagescontroller::class,'hp']);
Route::get('/macbook',[pagescontroller::class,'macbook']);
Route::get('/lenovo',[pagescontroller::class,'lenovo']);
Route::get('/taifa',[pagescontroller::class,'taifa']);
Route::get('/toshiba',[pagescontroller::class,'toshiba']);
Route::get('/other',[pagescontroller::class,'other']);
Route::get('/games',[pagescontroller::class,'games']);
Route::get('/flower',[pagescontroller::class,'flower']);
Route::get('/keyboard',[pagescontroller::class,'keyboard']);
Route::get('/chargers',[pagescontroller::class,'chargers']);
Route::get('/stick',[pagescontroller::class,'stick']);
Route::get('/bat',[pagescontroller::class,'bat']);
Route::get('/bags',[pagescontroller::class,'bags']);
Route::get('/about',[pagescontroller::class,'about']);
Route::get('/contact',[pagescontroller::class,'contact']);
Route::get('/terms',[pagescontroller::class,'terms']);
Route::get('/policy',[pagescontroller::class,'policy']);

//message




