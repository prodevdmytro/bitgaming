<?php

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
    return view('index');
});

Route::get('/shop', 'ShopController@index');
Route::get('/cash', 'MatchfinderController@cash_index');
Route::get('/xp', 'MatchfinderController@xp_index');
Route::get('/tournament', 'TournamentController@index');
Route::get('/template', 'TemplateController@index');
Route::get('/leaderboard', 'LeaderboardController@index');
Route::get('/faq', 'FaqController@index');
Route::get('/news', 'NewsController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
