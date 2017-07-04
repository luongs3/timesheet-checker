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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('timesheet', 'TimesheetController@index')->name('timesheet.index');

Route::resource('boxes/{id}/users','BoxUserController');
Route::get('boxes/{id}/users/name', 'BoxUserController@getNameAllMembersInBox');


