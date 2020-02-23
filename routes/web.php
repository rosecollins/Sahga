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

Route::view('/', 'index');
Route::post('/', [
    'uses'=> 'sahgaController@addSahga',
    'as' => 'form'
]);
Route::get('/sahgat', [
    'uses'=> 'sahgaController@listSahga',
    'as'=> 'sahgat'
]);
Route::view('/about', 'about');



//TODO: READ ABOUT ABORT() FUNCTION
