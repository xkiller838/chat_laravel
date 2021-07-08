<?php

use Illuminate\Support\Facades\Route;

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

Route::get('auth/user', function() {
 
	if(auth()->check()) 
		return response()->json([
			'authUser' => auth()->user()
		]);
 
	return null;
 
});

Route::group(['middleware' => 'online' ], function() {

	Route::get('chat/{chat}/get_users', 'ChatController@get_users')->name('chat.get_users');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('chat/with/{user}', 'ChatController@chat_with')->name('chat.with');

Route::get('chat/{chat}', 'ChatController@index')->name('chat.index');

Route::post('message/sent', 'MessageController@sent');

Route::get('/chat/{chat}/get_messages/', 'ChatController@get_messages')->name('chat.get_messages');


Route::get('/usuarios', 'UserController@index')->name('usuarios');

});


