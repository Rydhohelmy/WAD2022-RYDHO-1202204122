<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('product.Home_RYDHO');

});

Route::get(uri: '/login', action: function() {
    return view('product.Login_RYDHO');
});

Route::get(uri: '/Register', action: function() {
    return view('product.Register_RYDHO');
});

Route::get('/Home-page', action: function() {
    return view('product.Home_RYDHO');
});

Route::get('/Home', action: function() {
    return view('product.Home_RYDHO');
});

Route::get('/Listcar', action: function() {
    return view('product.ListCar_RYDHO');
});

Route::get('/Addcar', action: function() {
    return view('product.Add_RYDHO');
});

Route::get('Detail', action: function() {
    return view('produuct.Detail_RYDHO');
});

Route::get('Edit', action: function() {
    return view('produuct.Edit_RYDHO');
});

Route::get('Update', action: function() {
    return view('produuct.Edit_RYDHO');
});

Route::get('/product{id}/Edit', action: function() {
    return view('product.Edit_RYDHO');
});

Route::resource('product', ProductController::class);
Route::resource('/Listcar', ProductController::class);
Route::resource('/product/{id}', ProductController::class);
Route::resource('/product/{id}/edit', ProductController::class);
Route::resource('/Update', ProductController::class);
Route::resource('/Detailcar', ProductController::class);