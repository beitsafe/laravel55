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


Route::get('login/google', 'SocialiteController@redirectToProvider')->name('google.login');
Route::get('login/google/callback', 'SocialiteController@handleProviderCallback');

Route::group(['middleware' => 'auth', 'prefix' => ''], function () {
    Route::get('/home', 'SocialiteController@index');

});