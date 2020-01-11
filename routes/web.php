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

Route::get('/', 'FrontendController@index')->name('home');

Route::get(trans('routes.object'), 'FrontendController@object')->name('object');
Route::get(trans('routes.roomsearch'), 'FrontendController@roomsearch')->name('roomSearch');
Route::get(trans('routes.room'), 'FrontendController@room')->name('room');
Route::get(trans('routes.article'), 'FrontendController@article')->name('article');
Route::get(trans('routes.person'), 'FrontendController@person')->name('person');