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

Route::get('/', 'CarController@carsList');

Route::get('/car/{id}', 'CarController@car');

Route::get('/form/{carId}', 'FormController@form');

Route::get('/creditRequest/create', 'CreditRequestController@requestCreate');


