<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\welcome;
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
Route::middleware(['language'])->group(function(){
    Route::get('/', [welcome::class, 'welcome'])->name('welcome');
    Route::get('/about', [welcome::class, 'about'])->name('about');
    Route::get('/event', [welcome::class, 'event'])->name('event');
    Route::get('/works', [welcome::class, 'works'])->name('works');
    Route::get('/contact', [welcome::class, 'contact'])->name('contact');
    Route::get('/gallery', [welcome::class, 'gallery'])->name('gallery');
    Route::post('/request_mail', [welcome::class, 'mail'])->name('request_mail');

});


Auth::routes();
Route::get('/lang', [welcome::class, 'change_lang'])->name('lang_change');
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});