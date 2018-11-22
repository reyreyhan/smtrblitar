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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'HomeController@index');
Route::get('/peta', 'HomeController@peta');
Route::get('/perda', 'HomeController@perda');
Route::get('/zonasi', 'HomeController@zonasi');

Route::get('/rdtr/pola-ruang','HomeController@PolaRuang');
Route::get('/rdtr/jaringan-prasarana', 'HomeController@JaringanPrasarana');
Route::get('/rdtr/prioritas', 'HomeController@prioritas');

Route::get('/bwp1', 'HomeController@bwp1');
Route::get('/bwp2', 'HomeController@bwp2');
Route::get('/bwp3', 'HomeController@bwp3');
Route::get('/bwp4', 'HomeController@bwp4');

Route::get('/itbx1', 'HomeController@itbx1');
Route::get('/itbx2', 'HomeController@itbx2');
Route::get('/itbx3', 'HomeController@itbx3');
Route::get('/itbx4', 'HomeController@itbx4');

Route::get('/berita', 'HomeController@berita');
Route::get('/berita/{id}', 'HomeController@DetailBerita');
Route::post('/berita', 'HomeController@search');

Route::get('/login', 'HomeController@login');
Route::post('/login/check', 'HomeController@check');
Route::get('/logout', 'HomeController@logout');

Route::get('/admin', 'AdminController@index')->middleware('CheckSession');
Route::get('/admin/create', 'AdminController@create')->middleware('CheckSession');
Route::post('/admin/post', 'AdminController@store')->middleware('CheckSession');
Route::get('/admin/delete/{id}', 'AdminController@delete')->middleware('CheckSession');
Route::get('/admin/edit/{id}', 'AdminController@edit')->middleware('CheckSession');
Route::post('/admin/update/{id}','AdminController@update')->middleware('CheckSession');
Route::get('/admin/about','AdminController@about')->middleware('CheckSession');
Route::get('/admin/about/{id}','AdminController@DetailAbout')->middleware('CheckSession');

Route::get('/zona','DropdownAjaxController@index');
Route::post('/zona','DropdownAjaxController@hasil');
Route::get('/zona/{id}','DropdownAjaxController@subzona');


Route::get('/about','HomeController@about');
Route::post('/about','HomeController@AboutStore');