<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
//Add this route
Route::get('crud', array('as' => 'crud_index', 'uses' => 'CrudController@index'));
 
Route::get('crud/form/{id?}', array('as' => 'crud_form', 'uses' => 'CrudController@form'));
 
Route::get('crud/delete/{id?}', array('as' => 'crud_delete', 'uses' => 'CrudController@delete'));
 
Route::post('crud/save', array('as' => 'crud_save', 'uses' => 'CrudController@save'));