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

Route::get('/', 'HomeController@index')->name ('homepage');
//COUNTRY
Route::get ('countries','CountriesController@index')->name('countries.index');
Route::get ('countries/create','CountriesController@create')->name('countries.create');
Route::get('countries/{country}/edit','CountriesController@edit')->name('countries.edit');
Route::get ('countries/{country}','CountriesController@show')->name('countries.show');
Route::post('countries','CountriesController@store')->name('countries.store');
Route::put('countries/{country}','CountriesController@update')->name('countries.update');
Route::delete('countries/{country}','CountriesController@delete')->name('countries.delete');
//STATE
Route::get ('states','StatesController@index')->name('states.index');
Route::get ('states/create','StatesController@create')->name('states.create');
Route::get('states/{state}/edit','StatesController@edit')->name('states.edit');
Route::get ('states/{state}','StatesController@show')->name('states.show');
Route::post('states','StatesController@store')->name('states.store');
Route::put('states/{state}','StatesController@update')->name('states.update');
Route::delete('states/{state}','StatesController@delete')->name('states.delete');
//OTRAS RUTAS
Route::get('ajax/states/{country?}','StatesController@ajaxindex')->name('states.ajaxindex');//?signo de marcar opcional un parametro