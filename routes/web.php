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

Route::get('/home', 'HomeController@index');



Route::resource('admProfiles', 'adm_profilesController');



Route::resource('tourismDesCats', 'tourism_des_catsController');

Route::resource('tourismDests', 'tourism_destsController');

Route::resource('prodCats', 'prod_catsController');

Route::resource('products', 'productsController');







Route::resource('services', 'servicesController');

Route::resource('employees', 'employeesController');

Route::resource('reports', 'reportsController');

Route::resource('eventCats', 'event_catsController');

Route::resource('clientsUsers', 'clients_usersController');

Route::resource('clientsProfiles', 'clients_profilesController');

Route::resource('clientsScores', 'clients_scoresController');

Route::resource('clientsBookmarks', 'clients_bookmarksController');