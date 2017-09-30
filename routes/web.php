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
Route::get('events/listing',['as'=>'events.listing','uses'=>'EventController@eventlisting']);
Route::get('events/enableas/{id}',['as'=>'events.enable','uses'=>'EventController@enabled']);
Route::get('events/disable/{id}',['as'=>'events.disable','uses'=>'EventController@disabled']);
Route::get('events/edit/{id}',['as'=>'events.edit','uses'=>'EventController@edit']);
Route::post('events/update',['as'=>'events.update','uses'=>'EventController@update']);
Route::get('events/delete/{id}',['as'=>'events.del','uses'=>'EventController@delete']);

Route::match(['get','post'],'type/addtype',['as'=>'create.type','uses'=>'TypeController@create']);
Route::get('type/listing',['as'=>'type.typelisting','uses'=>'TypeController@typelisting']);
Route::get('type/enableas/{id}',['as'=>'type.enable','uses'=>'TypeController@enabled']);
Route::get('type/disable/{id}',['as'=>'type.disable','uses'=>'TypeController@disabled']);
Route::get('type/edit/{id}',['as'=>'type.edit','uses'=>'TypeController@typeedit']);
Route::post('type/update',['as'=>'type.update','uses'=>'TypeController@updatetype']);
Route::get('type/delete/{id}',['as'=>'type.del','uses'=>'TypeController@delete']);