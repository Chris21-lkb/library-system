<?php

use App\Http\Controllers\addController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\CheckoutController;

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

Route::get('/insert', function () {
    return view('insert');
});

Route::get('/', function () {
    return view('pages.login');
});

Route::get('/home', function () {
    return view('pages.home');
})-> middleware('auth');

Route::get('/checkout/{id}', function () {
   return view('pages.checkout');
})-> middleware('auth');

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/search', function () {
    return view('pages.search');
});

Route::get('searchbook/',[bookController::class,'search'])->name('search');
Route::get('admin/',[adminController::class,'index']);
Route::get('showbook/{id}/',[bookController::class,'showdata']);

Route::post('addCheckout',[checkoutController::class,'store']);
Route::post('insert',[bookController::class,'store']);

Route::get('delete/{id}',[bookController::class,'destroy']);
Route::get('deleteuser/{id}',[adminController::class,'destroy']);

Route::get('edit/{id}',[bookController::class,'edit']);
Route::POST('editbook',[bookController::class,'updatebook']);