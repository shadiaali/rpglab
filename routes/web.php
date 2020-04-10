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

Route::get('character/{id}','CharacterController@details')->name('character.details');


//users can't create users
Route::get('users/create', 'UsersManagementController@create')->name('users.create')->middleware('permission:create.users');

//users can't edit users
Route::get('users/{user}/edit', 'UsersManagementController@edit')->name('users.edit')->middleware('permission:edit.users');

//users can't delete users
Route::delete('users/{user}', 'UsersManagementController@destroy')->name('user.destroy')->middleware('permission:delete.users');

//user can edit own profile
Route::get('user/{user}/edit', 'UsersManagementController@editUser')->middleware(['auth']);

//user edit own profile update route
Route::post('user/update','UsersManagementController@updateUser')->name('user.update')->middleware(['auth']);
