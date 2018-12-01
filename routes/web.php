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
Route::get('/', 'IndexController@index')->name('index');

route::get("/users/create", "UserController@create")->name('users.register');
route::post("/users", "UserController@store");
route::get("/users/login", "UserController@login")->name('users.login');
route::post("/users/login", "UserController@doLogin");
route::post("/", 'UserController@logout')->name('users.logout');