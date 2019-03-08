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

Route::get('ju_custom/show/{id}', 'ju_custom_Controller@show');

Route::get('ju_custom/show/{id}/edit', 'ju_custom_Controller@edit');

Route::put('ju_custom/{id}', 'ju_custom_Controller@update');

Route::resource('ju_custom','ju_custom_Controller');

Route::delete('ju_custom/{id}', 'ju_custom_Controller@destroy');

// 寫入的表單
Route::post('/store','ju_custom_Controller@store');
// 寫入的資料接到這個function
