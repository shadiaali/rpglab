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
//home page
Route::get('/home', 'HomeController@index')->name('home');
//a user can create a character
Route::get('/addcharacter', 'CharacterController@create')->name('character.create');
//a user can store the character
Route::post('/addcharacter', 'CharacterController@store')->name('character.store');
//show all the characters
Route::get('/characters', 'CharacterController@showAllCharacters')->name('characters.showAllCharacters');
//show a user's owned characters
Route::get('/character', 'CharacterController@myCharacters')->name('character.myCharacters');
//each character has a profile page
Route::get('character/{id}','CharacterController@details')->name('character.details');
//user can edit owned character 
Route::get('character/{id}/edit', 'CharacterController@editCharacter')->middleware(['auth']);

//user edit owned character update route
Route::post('character/update','CharacterController@updateCharacter')->name('character.update');
//Route::post('character/update', 'CharacterController@updateCharacter')->name('character.update');
//Route::post('character/update','CharacterController@updateCharacter')->name('character.update');
//Route::put('character/update/{id}', ['as' => 'character.update', 'uses' => 'CharacterController@updateCharacter']);


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

//send award
Route::get('/sendaward', 'AwardController@create')->name('award.create');
//store award
Route::post('/sendaward', 'AwardController@store')->name('award.store');