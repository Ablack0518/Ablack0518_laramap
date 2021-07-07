<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UrlsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\LaramapController;
use App\Http\Controllers\ContactsController;


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



Route::get('/', HomeController::class)->name('root_path');
Route::view('/about', 'pages.about')->name('about_path');


/** LaraMap Projet **/
Route::get('/laramap', [LaramapController::class, 'index'])->name('laramap');
Route::view('/laramap/about', 'laramap.about')->name('larmap_about');
Route::get('/laramap/contact', [ContactsController::class, 'create'])->name('contact');
//Route::post('/laramap/contact', [ContactsController::class, 'store']);//we can use this route with action on form 'contact'
Route::resource('laramap', LaramapController::class);
Route::resource('contact', ContactsController::class);




/** Events Projet **/
Route::get('/event', [EventsController::class, 'index'])->name('root_events');
Route::resource('events', EventsController::class);
Route::get('event/admin', [EventsController::class, 'admin'])->name('path_admin');


/** Posts Projet **/
Route::get('posts', [PostsController::class, 'index'])->name('posts_path');

/** Url-shortener Projet **/
Route::view('/url-short', 'pages.url-shortener')->name('url-short_path');
Route::post('url-short', [UrlsController::class, 'store']);
Route::get('/{urlShortened}', [UrlsController::class, 'show']);
Route::get('/url', [UrlsController::class, 'showUrlshortened']);
