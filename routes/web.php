<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('main-page');
});

Route::get("/login", function (){
    return view("login");
});
Route::get("/society",function (){
   return view("society-page");
});

Route::post("/login/check",[LoginController::class ,"authenticate"]);

Route::get("/register",function (){
    return view("register");
});

Route::post("/register/check",[RegisterController::class,"store"]);


Auth::routes(['verify' => true]);

