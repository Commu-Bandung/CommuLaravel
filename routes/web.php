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
Route::get('social', function() {
    return view('sociallogin');
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

Route::get('kerjasamaanggota','KerjasamaController@viewKejasama');

Route::get('profil','profileController@showProfile'); 
Route::get('editprofile','profileController@editProfile');
Route::post('uptprofile','profileController@updateprofile');

Route::post('login','AuthController@login');
Route::get('logout','AuthController@logout');
Route::get('registeranggota', function() {
    return view('auth.register');
});
Route::post('register','AuthController@register');

Route::post('ajukan','ProposalController@pengajuan');

Route::get('download/{file}','ProposalController@download');

//admin
Route::get('admin', function () {
    return view('homeadmin');
})->name('admin');

Route::get('loginadmin',function() {
    return view('auth.loginadmin');
});

Route::post('logintoadmin','AuthController@loginadmin');
Route::get('logoutadmin','AuthController@logoutadmin');

Route::get('profiladmin','profileController@showprofileAdmin'); 

Route::get('editprofileadmin','profileController@editProfileAdmin');
Route::post('uptprofileadmin','profileController@updateProfileAdmin');
Route::get('validasi', 'ProposalController@showAllpengajuan')->name('validasi');
Route::post('validasi/{id}', 'ProposalController@validasi');


//perusahaan
Route::get('perusahaan', function () {
    return view('homeperusahaan');
})->name('perusahaan');

Route::get('login/perusahaan', function () {
    return view('auth.loginperusahaan');
});

Route::post('logintoperusahaan','AuthController@loginperusahaan');
Route::get('logoutperusahaan','AuthController@logoutperusahaan');

Route::get('register/perusahaan', function () {
    return view('auth.registerperusahaan');
});

Route::post('registerperusahaan','AuthController@registeradmin');

Route::get('viewpengajuan', 'ProposalController@viewForReview')->name('viewpengajuan');

Route::get('reviewproposal/{id}','ProposalController@ReviewPrposal');

Route::get('pengajuan/{id}','ProposalController@detailProposal');

Route::get('viewpengajuandetail', function () {
    return view('viewpengajuandetail');
})->name('viewpengajuandetail');

Route::get('viewproposalditerima','ProposalController@listProposalDiterima');

Route::get('viewpengajuanditerima', function () {
    return view('viewpengajuanditerima');
});
Route::get('detailreview/{id}','ProposalController@detailreview');

Route::post('aksi/kerjasama/{id}','KerjasamaController@buatKerjasama');

Route::get('pilihrespon', function () {
    return view('pilihrespon');
})->name('pilihrespon');

Route::get('kerjasama','KerjasamaController@showKerjasamaByperusahaan');

Route::post('aksi/sponsor/{id}','BantuanController@addBantuan');

Route::get('bantuanperusahaan','BantuanController@showBantuanByperusahaan');
