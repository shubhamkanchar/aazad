<?php

use App\Http\Controllers\AdminController;
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
    Route::get('/donation', [welcome::class, 'donation'])->name('donation');
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
Route::middleware(['auth', 'user-access:admin','verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->name('home');
    
    Route::get('/donation/add', [AdminController::class, 'add_donation'])->name('add_donation');
    Route::any('/donation/create', [AdminController::class, 'create_donation'])->name('create_donation');
    Route::get('/donation/update/{id}', [AdminController::class, 'update_donation'])->name('update_donation');
    Route::get('/donation/list', [AdminController::class, 'donation_list'])->name('donation_list');
    Route::get('/donation/delete/{id}', [AdminController::class, 'donation_delete'])->name('donation_delete');

    Route::get('/event/add', [AdminController::class, 'add_event'])->name('add_event');
    Route::any('/event/create', [AdminController::class, 'create_event'])->name('create_event');
    Route::get('/event/update/{id}', [AdminController::class, 'update_event'])->name('update_event');
    Route::get('/event/list', [AdminController::class, 'event_list'])->name('event_list');
    Route::get('/event/delete/{id}', [AdminController::class, 'event_delete'])->name('event_delete');

    Route::get('/work/add', [AdminController::class, 'add_work'])->name('add_work');
    Route::any('/work/create', [AdminController::class, 'create_work'])->name('create_work');
    Route::get('/work/update/{id}', [AdminController::class, 'update_work'])->name('update_work');
    Route::get('/work/list', [AdminController::class, 'work_list'])->name('work_list');
    Route::get('/work/delete/{id}', [AdminController::class, 'work_delete'])->name('work_delete');


    Route::get('/gallery/add', [AdminController::class, 'add_gallery'])->name('add_gallery');
    Route::any('/gallery/create', [AdminController::class, 'create_gallery'])->name('create_gallery');
    Route::get('/gallery/update/{id}', [AdminController::class, 'update_gallery'])->name('update_gallery');
    Route::get('/gallery/list', [AdminController::class, 'gallery_list'])->name('gallery_list');
    Route::get('/gallery/delete/{id}', [AdminController::class, 'gallery_delete'])->name('gallery_delete');

    Route::get('/request/list', [AdminController::class, 'request_list'])->name('request_list');
    Route::get('/request/delete/{id}', [AdminController::class, 'request_delete'])->name('request_delete');
    route::get('pdf/{id}',[AdminController::class, 'delete_pdf'])->name('delete_pdf');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});