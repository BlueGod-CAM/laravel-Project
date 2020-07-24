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


Route::get("/index","SocialController@index")->middleware("auth");

Route::prefix("/post")->group(function() {
    Route::post("", "SocialController@store")->middleware("auth");
});
Route::get("/profile/{id}","FollowController@index");

Auth::routes();

