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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/character', 'CharacterController@create')->name('character.create');
Route::post('/character', 'CharacterController@store')->name('character.store');
Route::get('/characters', 'CharacterController@showAllCharacters')->name('characters.showAllCharacters');



Route::get('users/create', 'UsersManagementController@create')->name('users.create')->middleware('permission:create.users');