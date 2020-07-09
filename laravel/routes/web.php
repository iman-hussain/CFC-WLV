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
    return view('home');
});

Route::get('/home', function () {
        return view('home');
    });

Route::get('/location', 'LocationsController@index');
Route::get('/location/{location}', 'LocationsController@show');

Route::put('location/{location}', 'LocationsController@update')->middleware('auth');

Route::get('/location/{location}/edit', 'LocationsController@edit')->middleware('auth');
Route::get('/location/{location}/delete', 'LocationsController@delete')->middleware('auth');

Route::get('/submit',  'SubmitController@submit')->middleware('auth');
Route::post('/submit', 'SubmitController@store')->middleware('auth');

Route::get('/api', function () {
        return view('api');
});

Route::get('/json', 'JsonController@json');

Route::get('/about', function () {
        return view('about');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
