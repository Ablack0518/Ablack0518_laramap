<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\LaramapsController;


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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::view('/', 'welcome')->name('apptest');
Route::view('/about', 'pages.about')->name('about_path');


/** LaraMap Projet **/
Route::view('/laramap', 'laramap.index')->name('laramap-path');
Route::view('/laramap/about', 'laramap.about')->name('laramap_about');
Route::view('/laramap/contact', 'laramap.contact')->name('laramap_contact');
Route::resource('laramaps', LaramapsController::class);




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