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
Route::any('all_queries/{id}', ['as'=>'queries', 'uses'=>'EventController@all_query']);

Route::get('/home', 'HomeController@index')->name('home');
Route::match(['get','post'],'events/addevent',['as'=>'create.event','uses'=>'EventController@create']);
Route::match(['get','post'],'type/addtype',['as'=>'create.type','uses'=>'TypeController@create']);
Route::get('events/listing',['as'=>'events.listing','uses'=>'EventController@eventlisting']);
Route::get('events/enableas/{id}',['as'=>'events.enable','uses'=>'EventController@enabled']);