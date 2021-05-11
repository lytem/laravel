<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\FornitoriController;

use App\Http\Controllers\ProductsController;
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

Route::resource('categories', CategoriesController::class)->parameters([
    'categories'=>'categorie'
]);

Route::resource('fornitores', FornitoriController::class);

Route::resource('products', ProductsController::class);

Route::get('/', function () {
    return view('home');
});

// ciao!
// ciao franceso
//provare
//hot
//notte
// commento
