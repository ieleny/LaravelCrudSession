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
//     return view('home');
// });

Route::get('/','GeladeiraController@index');

Route::get('Geladeira/create','GeladeiraController@create');

//Acoes
Route::get('Geladeira/{id}/edit',['as'=>'Geladeira.edit','uses'=>'GeladeiraController@edit']);
Route::get('Geladeira/{id}/delete',['as'=>'Geladeira.delete','uses'=>'GeladeiraController@delete']);
