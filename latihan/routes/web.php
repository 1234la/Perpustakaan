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
})->name('homepage');

Auth::routes();
//read semua buku tanpa edit dan delete
Route::get('/bukus','BukuController@index');

//tambah buku 
Route::get('/create','BukuController@create');

//edit buku 
Route::get('/buku/edit/{id}','BukuController@edit');
Route::post('/buku/update','BukuController@update');

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@dashboardAdmin')->middleware('onlyAdmin');
Route::get('/admin/index', 'HomeController@dashboardAdmin')->middleware('onlyAdmin');
// Route::get('/user/index', 'HomeController@dashboardUser')->middleware('onlyOrdinaryUser');
Route::get('/user/index', 'HomeController@dashboardUser')->name('homepage');
Route::get('/notfound/index', 'HomeController@notFoundPage')->name('notFound');

//tambah buku
Route::resource('/buku', 'BukuController');
//hapus buku
Route::get('/buku/hapus/{id}','BukuController@destroy');

//register admin
Route::get('/registeradmin','HomeController@registerAdmin')->middleware('onlyAdmin');