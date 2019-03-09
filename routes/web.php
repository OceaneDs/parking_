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

Route::get('/', function ()
{
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([ 'is_admin' => 'App\Http\Middleware\IsAdmin' ],
function ()
{
  Route::get('/admin', 'AdminController@admin')
      ->name('admin');

  Route::get('/users_list', 'UsersListController@index')
      ->name('users_list');

  Route::post('validation', 'ValidationController@valid')
      ->name('validation');

  Route::get('/update_user', 'UpdateUserController@index')
      ->name('update_user');

  Route::post('/update', 'UpdateUserController@update')
      ->name('update');
});
