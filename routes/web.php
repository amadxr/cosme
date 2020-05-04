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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::prefix('steps')->group(function () {
        Route::get('/', 'StepController@index')->name('admin-home');
        Route::get('/create', 'StepController@create')->name('create-step');
        Route::get('/show/{step}', 'StepController@show');
    });
});
