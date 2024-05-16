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

Route::get('/', "PageController@homepage");

Route::get("/dashboard", "PageController@dashboard");
Route::get("/links", "PageController@links");
Route::get("/analytics", "PageController@analytics");
Route::get("/settings", "PageController@settings");

Route::get("/links/add-link", "PageController@addLink");
Route::post("links/saveLink", "PageController@saveLink");
Route::get("/getlink", "PageController@getLinks");

Route::get("/books", "PageController@books");
