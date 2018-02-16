<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|  Routes
|--------------------------------------------------------------------------
|
| Here is where you can register  routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "" middleware group. Enjoy building your !
|
*/

Route::middleware('auth:')->get('/user', function (Request $request) {
    return $request->user();
});