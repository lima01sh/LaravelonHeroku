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
Route::resource('index','App\Http\Controllers\StudentloadController');

Route::get('create','App\Http\Controllers\StudentloadController@create');
Route::post('create','App\Http\Controllers\StudentloadController@store');

// Route::get('/', function () {
//     return view('welcome');
// });
