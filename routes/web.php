<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Restaurant\AuthRestaurantController;
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


Route::get('/add-item', [App\Http\Controllers\ItemsController::class, 'add_item_page'])->name('add-item')->middleware('auth');
Route::post('/store',[App\Http\Controllers\ItemsController::class, 'store']);