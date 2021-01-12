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
    return view('welcome');
});

Auth::routes();

Route::middleware('checklogin')->group(function ($id) {
    Route::get('/index', function () {
        return view('index');
    })->name('index');
    Route::get('/index', 'MainController@index')->name('index');
});

Route::post('/like', 'LikesController@insert');

Route::get('/home', 'HomeController@index')->name('home');
