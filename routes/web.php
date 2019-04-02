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

Route::group(['prefix'=>'ju_custom'], function(){
	Route::get('show/{id}', 'ju_custom_Controller@show');
	Route::get('show/{id}/edit', 'ju_custom_Controller@edit');
	Route::put('{id}', 'ju_custom_Controller@update');
	Route::resource('/','ju_custom_Controller');
	Route::delete('{id}', 'ju_custom_Controller@destroy');
	Route::post('store','ju_custom_Controller@store');
});
// 這是範例的route


route::group(['prefix'=>'Calcul_size'],function(){
	Route::resource('/','Calcul_size_Controller');
	Route::post('store','Calcul_size_Controller@store');
});

// 這是計算的route

Route::group(['prefix'=>'ju_hardware'], function(){
	Route::get('show/{id}', 'ju_hardware@show');
	Route::get('show/{id}/edit', 'ju_hardware@edit');
	Route::put('{id}', 'ju_hardware@update');
	Route::resource('/','ju_hardware');
	Route::delete('{id}', 'ju_hardware@destroy');
	Route::post('store','ju_hardware@store');
});
// 這是範例的route