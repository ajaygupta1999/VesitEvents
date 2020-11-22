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

Route::get("/" ,'App\Http\Controllers\Home@index');

Route::get('/home', 'App\Http\Controllers\Home@index');

Route::get("/login" , 'App\Http\Controllers\Login@index');

Route::get("/signup" , 'App\Http\Controllers\Signup@index');

Route::get("/society" , 'App\Http\Controllers\Society@index');

Route::get('/register/personalDetails' , 'App\Http\Controllers\Register@personalDetails');

Route::get('/register/classAndSocietyDetails' , 'App\Http\Controllers\Register@classAndSocietyDetails');

Route::get('/addevent/aboutevent' , 'App\Http\Controllers\AddEvent@aboutEvent');

Route::get('/addevent/aboutguest' , 'App\Http\Controllers\AddEvent@aboutGuest');

Route::get('/event/{id}' , 'App\Http\Controllers\Eachevent@index');