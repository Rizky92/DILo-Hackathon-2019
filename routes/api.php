<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




Route::resource('tourism_des_cats', 'tourism_des_catsAPIController');

Route::resource('tourism_dests', 'tourism_destsAPIController');

Route::resource('prod_cats', 'prod_catsAPIController');

Route::resource('products', 'productsAPIController');





Route::resource('services', 'servicesAPIController');

Route::resource('reports', 'reportsAPIController');