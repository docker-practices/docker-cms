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

// Route::get('/AddUser', function () {
//     return view('addUser');
// });

Route::get('Users', 'UserController@ShowUsers');
Route::get('/AddUser', 'UserController@AddUser');
Route::get('EditUser/{id}', 'UserController@EditUser');
Route::get('UserShow/{id}', 'UserController@UserShow');
Route::get('DeleteUser/{id}', 'UserController@DeleteUser');

Route::post('UpdateUser/{id}', 'UserController@UpdateUser');
Route::post('InsertUser', 'UserController@InsertUser');

