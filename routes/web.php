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

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin/add-item', [App\Http\Controllers\ItemsController::class, 'add_item_page'])->name('add-item')->middleware('auth');
Route::post('/admin/storeitem',[App\Http\Controllers\ItemsController::class, 'store']);
Route::post('/admin/updateitem/{id}',[App\Http\Controllers\ItemsController::class, 'update']);
Route::get('/admin/items', [App\Http\Controllers\ItemsController::class , 'view_items_page'])->name('view-items');
Route::get('/admin/viewitems', [App\Http\Controllers\ItemsController::class , 'view_items']);
Route::get('/admin/viewitem/{id}', [App\Http\Controllers\ItemsController::class , 'view_item']);
Route::get('/admin/item/{id}', [App\Http\Controllers\ItemsController::class , 'view_item_page']);

Route::get('/admin/dashboard', [App\Http\Controllers\ItemsController::class , 'view_admin_dashboard'])->name('dashboard');

Route::get('/gethotpicks', [App\Http\Controllers\ItemsController::class, 'getHotProducts'])->middleware('guest');