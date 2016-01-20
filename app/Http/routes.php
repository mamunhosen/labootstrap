<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', 'bootstrap_con@index');
Route::get('create', 'bootstrap_con@create');
Route::post('store', 'bootstrap_con@store');
Route::get('delete/{id}', 'bootstrap_con@delete');
Route::get('edit/{id}', 'bootstrap_con@edit');
Route::post('update/{id}', 'bootstrap_con@update');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::get('create', 'bootstrap_con@create');
    Route::post('store', 'bootstrap_con@store');

});
