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
    
    Route::get('/index', 'MainController@index')->name('index');
    Route::post('/like', 'LikesController@insert');
});

Route::post('/uploadMessage','MessageController@insert');
Route::post('/updateUser','UserController@update')->name('updateUser');
Route::get('/home', 'HomeController@index')->name('home');
