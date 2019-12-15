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
//front-end
Route::get('/','EiserController@index')->name('/');
Route::get('/about','EiserController@about')->name('about');
Route::get('/albums','EiserController@albums')->name('albums');
Route::get('/blog','EiserController@blog')->name('blog');
Route::get('/contact','EiserController@contact')->name('contact');

//Authentication
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/add_album', 'AlbumController@add_album')->name('add_album');
Route::post('/dashboard/add_album','AlbumController@new_album')->name('new_album');

Route::get('/dashboard/add_Photographer', 'PhotographerController@add_photographer')->name('add_photographer');
Route::post('/dashboard/add_photographer','PhotographerController@new_photographer')->name('new_photographer');
Route::post('/add_contact','ContactController@new_contact')->name('new_contact');
Route::get('/album_details/{id}','EiserController@album_details')->name('album_details');
Route::get('/dashboard/contact_view','ContactController@view_contact')->name('view_contact');
