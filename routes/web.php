<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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


//Route for main pages and user
Route::get('', [UserController::class,'mainPage']);

Route::get('society',[UserController::class,'societyPage'])->middleware('auth');

Route::get('reset', [UserController::class,'passwordResetPage'])->middleware('auth');

Route::post('reset/check', [UserController::class ,'passwordReset'])->middleware('auth');

Route::get('newpassword',[UserController::class,'newPasswordPage'])->middleware('auth')->name('new_password');

Route::post('newpassword/check/{id}',[UserController::class,'newPassword'])->middleware('auth')->name('new_password_check');


//Register

Route::get('register',[RegisterController::class,'registerPage'])->name('register');

Route::post('register',[RegisterController::class,'register'])->name('register_check');

Route::get('verify/{token}',[RegisterController::class,'verifyUser']);


//Login
Route::get('login', [LoginController::class,'loginPage'])->name('login');

Route::post("login",[LoginController::class ,"authenticate"])->name('login_check');

Route::get('login/google', [LoginController::class, 'redirectToProvider']);

Route::get("login/google/done",[LoginController::class,'handleProviderCallback']);

Route::get('logout',[LoginController::class,'logout']);





