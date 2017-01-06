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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});

Route::get('/about', 'AboutController@index');
Route::get('/connect', 'ConnectController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/media', 'MediaController@media');
Route::get('/gallery', 'MediaController@gallery');
Route::get('/events', 'EventController@index');

Route::get('/doings-doings/about/add/{title}', 'AboutController@add');
Route::get('/doings-doings/about/del/{id}', 'AboutController@del');
Route::get('/doings-doings/about/view-g', 'AboutController@view');
Route::get('/doings-doings/about/truncate', 'AboutController@truncate');
Route::get('/admin/about/update', 'AboutController@editGet');
Route::post('/admin/about/update', 'AboutController@editPost');

Route::get('/doings-doings/connect/add/{title}', 'ConnectController@add');
Route::get('/doings-doings/connect/del/{id}', 'ConnectController@deld');
Route::get('/doings-doings/connect/view-g', 'ConnectController@view');
Route::get('/doings-doings/connect/truncate', 'ConnectController@truncate');
Route::get('/admin/connect/update', 'ConnectController@editGet');
Route::post('/admin/connect/update', 'ConnectController@editPost');

Route::get('/doings-doings/contact/view-g', 'ContactController@view');
Route::get('/contact/add', 'ContactController@add');
Route::get('/doings-doings/contact/add', 'ContactController@addSec');
Route::get('/admin/contact/update/{id}', 'ContactController@editGet');
Route::post('/admin/contact/update', 'ContactController@editPost');
Route::post('/admin/contact', 'ContactController@contactIndex');

//media
Route::get('/doings-doings/media', 'MediaController@viewMedia');
Route::get('/admin/media/add/{code}', 'MediaController@addGet');
Route::post('/admin/media/add', 'MediaController@add');
Route::get('/admin/media', 'MediaController@mediaIndex');

/*Route::get('/admin/media/audio/update/{id}', 'MediaController@audioEditGet');
Route::post('/admin/media/audio/update', 'MediaController@audioEditPost');
Route::get('/admin/media/gallery/update/{id}', 'MediaController@galleryEditGet');
Route::post('/admin/media/gallery/update', 'MediaController@galleryEditPost');
Route::get('/admin/media/video/update/{id}', 'MediaController@videoEditGet');
Route::post('/admin/media/video/update', 'MediaController@videoEditPost');*/





