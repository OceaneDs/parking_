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
Route::get('/Place', 'PlaceController@newPlace');
Route::group([ 'middleware' => ['is_admin']],
function ()
{
  Route::get('/admin', 'AdminController@admin')
      ->name('admin');
  Route::get('/users_list', 'UsersListController@index')
      ->name('users_list');
  Route::get('/users_list/{user}/validation', 'UsersListController@validation')
      ->name('userValid');
  Route::get('/update_user/{user}/affUpdate', 'UsersListController@affUpdate')
      ->name('update_user');
  Route::post('/update_user/{user}/affUpdate', 'UsersListController@affUpdate')
      ->name('update_user');
  Route::post('/update/{user}/update', 'UsersListController@update')
      ->name('update');
  Route::get('/listPlaces', 'PlaceController@listPlaces')
      ->name('/listPlaces');
  Route::get('/listPlaces/{place}/disponibilite', 'PlaceController@disponibilite')
      ->name('listPlaces');
});
