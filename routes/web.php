<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthRestaurantController;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('restaurant-login', [App\Http\Controllers\Auth\AuthRestaurantController::class, 'restaurantLogin'])->name('login.restaurant');

Route::get('logintorestaurant', [App\Http\Controllers\Auth\AuthRestaurantController::class, 'index'])->name('logintorestaurant');