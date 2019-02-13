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
Route::get('/home',function(){
  return view('home');
})->name('home');

Auth::routes();

Route::get('/changePassword','HomeController@showChangePasswordForm')->name('change-pass');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

Route::get('/home', 'HomeController@index')->name('home');
