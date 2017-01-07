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
Route::get('/contact/add', 'ContactController@add');
Route::get('/media', 'MediaController@media');
Route::get('/gallery', 'MediaController@gallery');
Route::get('/events', 'EventController@index');
Route::get('/team', 'TeamController@index');

Route::group(['prefix' => 'doings-doings'], function() {
	Route::get('/about/add/{title}', 'AboutController@add');
	Route::get('/about/del/{id}', 'AboutController@del');
	Route::get('/about/view-g', 'AboutController@view');
	Route::get('/about/truncate', 'AboutController@truncate');

	Route::get('/contact/view-g', 'ContactController@view');
	Route::get('/contact/add', 'ContactController@addSec');

	Route::get('/connect/add/{title}', 'ConnectController@add');
	Route::get('/connect/del/{id}', 'ConnectController@deld');
	Route::get('/connect/view-g', 'ConnectController@view');
	Route::get('/connect/truncate', 'ConnectController@truncate');
	Route::get('/media', 'MediaController@viewMedia');
	Route::get('/team', 'TeamController@jsonFormat');
	Route::get('/events', 'EventController@jsonFormat');
});

Route::group(['prefix' => 'admin'], function() {
	Route::get('/about/update', 'AboutController@editGet');
	Route::post('/about/update', 'AboutController@editPost');
	//connect
	Route::get('/connect/update', 'ConnectController@editGet');
	Route::post('/connect/update', 'ConnectController@editPost');
	//contact
	Route::get('/contact/update/{id}', 'ContactController@editGet');
	Route::post('/contact/update', 'ContactController@editPost');
	Route::get('/contact', 'ContactController@contactIndex');
	//media
	Route::get('/media/add/{code}', 'MediaController@addGet');
	Route::post('/media/add', 'MediaController@add');
	Route::get('/media/edit/{code}/{id}', 'MediaController@editGet');
	Route::post('/media/edit', 'MediaController@editPost');
	Route::get('/media/view/{id}', 'MediaController@showcase');
	Route::get('/media', 'MediaController@showcase');
	//team
	Route::get('/team/add', 'TeamController@addGet');
	Route::post('/team/add', 'TeamController@addPost');
	Route::get('/team/edit/{id}', 'TeamController@editGet');
	Route::post('/team/edit', 'TeamController@editPost');
	Route::get('/team/view/{id}', 'TeamController@view');
	Route::get('/team', 'TeamController@showcase');
	//event
	Route::get('/event/add', 'EventController@addGet');
	Route::post('/event/add', 'EventController@addPost');
	Route::get('/event/edit/{id}', 'EventController@editGet');
	Route::post('/event/edit', 'EventController@editPost');
	Route::get('/event/view/{id}', 'EventController@view');
	Route::get('/event', 'EventController@showcase');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

