<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// admin route
Route::namespace('Admin')->middleware('admin')->group(function(){
    Route::get('/admin','DashbordController@index')->name('index');
    Route::resource('/admin/acteur', 'ActorController');
    Route::resource('/admin/langue-audio','AudiolanguageController');
    Route::resource('/admin/producteur', 'DirectorController');
    Route::resource('/admin/copyright', 'CopyrightController');
    Route::resource('/admin/faq', 'FaqController');
    Route::resource('/admin/genre', 'GenreController');
    Route::resource('/admin/home-slide', 'HomeslideController');
    Route::resource('/admin/landing-page', 'LandingpageController');
    Route::resource('/admin/menu', 'MenuController');
    Route::resource('/admin/films', 'MovieController');
    Route::resource('/admin/package', 'PackageController');
    Route::resource('/admin/page-settings', 'PagesettingController');
    Route::resource('/admin/plan', 'PlanController');
    Route::resource('/admin/player-settings', 'PlayersettingController');
    Route::resource('/admin/serie','SerieController');
    Route::resource('/admin/seo','SeoController');
    Route::resource('/admin/slider', 'SlidersettingController');
    Route::resource('/admin/slider-limit', 'SliderlimitController');
    Route::resource('/admin/utilisateur','UserController');
});