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


Route::get('/demandeInsertForm','DemandeController@insertform');

Route::post('/demandeInsert','DemandeController@insert');

Route::get('tousLesDemandes', 'DemandeController@demandes');

Route::get('demandeInfo/{id}', 'DemandeController@demandeInfo');

Route::post('/demandeInfo','OffreController@insert');

Route::post('/tousLesDemandes', 'DemandeController@filter');

