<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Route::get('/','TemplateController@index');
Route::get('/','DetailsController@index');

Route::get('/detail/{id}', 'DetailsController@show')->name('detail.show');

Route::post('/detail/mon', 'DetailsController@setMonitoring')->name('index.mon');
Route::post('/detail/Unmon', 'DetailsController@unsetMonitoring')->name('index.Unmon');
Route::post('/detail/ana', 'DetailsController@analize')->name('index.analyze');