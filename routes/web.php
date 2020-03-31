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


//Geladeira
//URL
Route::get('adicionarGeladeira', function () {
    return view('adicionarGeladeira');
});
//ROUTE POST
Route::post('/create', 'GeladeiraController@create');
Route::post('Geladeira/{id}/update',['as'=>'Geladeira.update','uses'=>'GeladeiraController@update']);
//ROUTE GET
Route::get('/','GeladeiraController@index');
Route::get('Geladeira/{id}/edit',['as'=>'Geladeira.edit','uses'=>'GeladeiraController@edit']);
Route::get('Geladeira/{id}/delete',['as'=>'Geladeira.delete','uses'=>'GeladeiraController@delete']);

//Condimentos da Geladeira
//ROUTE GET
Route::get('Condimentos/{id}/list',['as'=>'Condimentos.list','uses'=>'CondimentosController@list']);
Route::get('Condimentos/{id}/create',['as'=>'Condimentos.create','uses'=>'CondimentosController@create']);
//ROUTE POST
Route::post('Condimentos/{id}/save',['as'=>'Condimentos.save','uses'=>'CondimentosController@save']);

