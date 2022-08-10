<?php

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

Route::get('/', [App\Http\Controllers\LandingController::class, 'index']);
Route::get('/solution', [App\Http\Controllers\LandingController::class, 'solution'])->name('solution');
Route::get('/candidate', [App\Http\Controllers\LandingController::class, 'candidate'])->name('candidate');
Route::get('/talent-stream', [App\Http\Controllers\LandingController::class, 'talent'])->name('talent');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	Route::get('map', function () {return view('pages.maps');})->name('map');
	Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	
	//article route
	Route::get('article', ['as' => 'article.allpost', 'uses' => 'App\Http\Controllers\ArticleController@index']);
	Route::get('article/create', ['as' => 'article.create', 'uses' => 'App\Http\Controllers\ArticleController@create']);
	Route::post('article/media', ['as' => 'article.storeMedia', 'uses' => 'App\Http\Controllers\ArticleController@storeMedia']);
	Route::post('article/store', ['as' => 'article.store', 'uses' => 'App\Http\Controllers\ArticleController@store']);
	Route::get('article/{article}/edit', ['as' => 'article.edit', 'uses' => 'App\Http\Controllers\ArticleController@edit']);
	Route::put('article/{article}/update', ['as' => 'article.update', 'uses' => 'App\Http\Controllers\ArticleController@update']);
	Route::get('article/{article}/delete', ['as' => 'article.delete', 'uses' => 'App\Http\Controllers\ArticleController@destroy']);

	// user route
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::put('user/password/{user}', ['as' => 'user.password', 'uses' => 'App\Http\Controllers\UserController@password']);

	// contact route
	Route::get('contact', ['as' => 'contact.edit', 'uses' => 'App\Http\Controllers\ContactController@index']);
	Route::put('contact/{contact}', ['as' => 'contact.update', 'uses' => 'App\Http\Controllers\ContactController@update']);
});

