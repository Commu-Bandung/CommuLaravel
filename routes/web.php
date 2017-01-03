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

Route::get('/home', 'HomeController@index');

Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');


Route::get('pengajuan', function() {
    return view('pengajuan');
});

Route::get('view', function() {
    return view('viewreview');
});

Route::get('bantuan', function() {
    return view('bantuan');
});

Route::get('kerjasama', function() {
    return view('kerjasama');
});

Route::get('profil', function() {
    return view('profile');
});