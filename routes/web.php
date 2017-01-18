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
    return view('home');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('about', function() {
    return view('about');
});

Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');


Route::get('pengajuan', function() {
    return view('pengajuan');
})->name('responajuan');

Route::get('view','ProposalController@viewReview');

Route::get('bantuan','BantuanController@viewBantuan');

Route::get('kerjasama','KerjasamaController@viewKejasama');

Route::get('profil', function() {
    return view('profile');
});

Route::post('login','AuthController@login');
Route::get('logout','AuthController@logout');
Route::post('register','AuthController@register');

Route::post('ajukan','ProposalController@pengajuan');
