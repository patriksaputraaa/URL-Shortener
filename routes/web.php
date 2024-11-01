<?php

use App\Http\Controllers\SessionController;
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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', "SessionController@homepage")->name('login');
    Route::post('/login', "SessionController@login");
    Route::get('/register', "SessionController@register");
    Route::post('/create', "SessionController@create");
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', "SessionController@logout");
    Route::put('/update-profile', "UserController@updateProfile");
    Route::get('/password', "UserController@changePassword");
    Route::put('/update-password', "UserController@updatePassword");

    Route::get("/dashboard", "PageController@dashboard");
    Route::get("/links", "PageController@links");
    Route::post("/links/add-link", "PageController@addLink");
    Route::get("/analytics", "PageController@analytics");
    Route::get("/settings", "PageController@settings");

    Route::get("/links/add-link", "PageController@addLink");
    Route::post("links/saveLink", "PageController@saveLink");
    Route::get("/getlink", "PageController@getLinks");

    Route::get("/links/edit/{short_url}", "PageController@editLink");
    Route::put("/links/update/{short_url}", "PageController@updateLink");
    Route::get("/links/delete/{short_url}", "PageController@deleteLink");
});

Route::get('/home', [
    'as' => 'home',
    'uses' => 'PageController@dashboard'
])->middleware('auth');
