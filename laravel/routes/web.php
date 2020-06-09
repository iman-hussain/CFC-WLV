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

Route::get('/submit',  'SubmitController@submit');
Route::post('/submit', 'SubmitController@store');

Route::get('/api', function () {
        return view('api');
});

Route::get('/about', function () {
        return view('about');
});