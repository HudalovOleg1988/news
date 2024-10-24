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

Route::get('/', 'App\Http\Controllers\PostController@index');
Route::get('/post/{id}', 'App\Http\Controllers\PostController@post');
Route::get('/search', 'App\Http\Controllers\PostController@search');
Route::get('/section/{section}', 'App\Http\Controllers\PostController@section');
