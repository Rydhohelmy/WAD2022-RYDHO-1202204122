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

Route::get(uri: '/', action: function () {
    return view(view: 'product.Home_RYDHO');

});

Route::get(uri: '/login', action: function() {
    return view(view: 'product.Login_RYDHO');
});

Route::get(uri: '/Register', action: function() {
    return view(view: 'product.Register_RYDHO');
});