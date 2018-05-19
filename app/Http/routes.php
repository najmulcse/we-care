<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::any('/searchResult',['as'=> 'search.result', 'uses'=>'SearchController@searchResult']);
//Admin routes section started......

//-------------------------------------//

Route::group(['prefix'=>'admin'], function(){
	Route::get('/', ['as'=>'welcome.admin', 'uses'=>'AdminController@index']);
	Route::get('/addUser', ['as'=>'admin.addUser', 'uses'=>'AdminController@addUser']);
	Route::get('/allUsers', ['as'=>'admin.allUsers', 'uses'=>'AdminController@allUsers']);
	Route::post('/store', ['as'=>'admin.storeUser', 'uses'=>'AdminController@storeUser']);
});