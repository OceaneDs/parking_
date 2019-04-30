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
Route::get('/Historique', 'ReservationController@historique')->name('Historique');
Route::get('/create', 'ReservationController@index')->name('create');
Route::get('/creation', 'ReservationController@create')->name('creation');
Route::get('/Place', 'PlaceController@newPlace');

Route::group([ 'middleware' => ['is_admin']],

function ()
{

  // Controller administrateur
  Route::get('/admin', 'AdminController@admin')
      ->name('admin');
  // Index de gestion d'utilisateurs
  Route::get('/users_list', 'UsersListController@index')
      ->name('users_list');
      //Gestion de la validation
  Route::get('/users_list/{user}/validation', 'UsersListController@validation')
      ->name('user.valid');
      // Affichage pour la modification
  Route::get('/update_user/{user}/edit', 'UpdateUserController@edit')
      ->name('user.edit');
  Route::post('/update_user/{user}/edit', 'UpdateUserController@edit')
      ->name('user.edit');
      // Mise à jour
  Route::post('/update/{user}/update', 'UpdateUserController@update')
      ->name('user.update');

  Route::get('/listReservations', 'ReservationController@listreservation')
     ->name('listReservations');
  Route::get('/listPlaces', 'PlaceController@listPlaces')
      ->name('/listPlaces');
  Route::get('/listPlaces/{place}/disponibilite', 'PlaceController@disponibilite')
      ->name('listPlaces');

  // Affiche la liste d'attente
  Route::get('/waitingList/edit', 'WaitingListController@edit')
      ->name('waitingList.edit');

  // Mise à jour de l'odre des positions de la liste d'attente
  Route::post('/waitingList/{user}/update', 'WaitingListController@update')
      ->name('waitingList.update');

  // Supprime un utilisateur de la liste d'attente
  Route::get('/waitingList/{user}/delete', 'WaitingListController@destroy')
      ->name('waitingList.delete');

});
