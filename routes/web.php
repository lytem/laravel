<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\FornitoriController;
use App\Http\Controllers\StocksController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\RecordsController;
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
Route::resource('orders', OrdersController::class);
Route::resource('stocks', StocksController::class);
Route::resource('categories', CategoriesController::class)->parameters([
    'categories'=>'categorie'
]);

Route::resource('fornitores', FornitoriController::class);

Route::resource('products', ProductsController::class);
Route::resource('records', RecordsController::class);

Route::get('/', function () {
    return view('home');
});

// ciao!
// ciao franceso
//provare
//hot
//notte
// commento

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
