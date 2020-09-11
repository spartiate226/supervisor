<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',"EmploieController@create")->middleware('auth');
Route::get('lookEmploi/{niveau?}/{emploi?}','boardController@voirEmploi')->name('lookEmploi')->middleware('auth');
Route::apiResource('emploi','EmploieController');

Route::post('connexion',"authController@login");
Route::get('deconnexion',"authController@logout");
Route::get('authentification',"authController@logForm")->name('login');

