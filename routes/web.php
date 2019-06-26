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