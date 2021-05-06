<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;

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
    return view('pages.login');
});

Route::post('insert',[bookController::class,'store']);

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
Route::get('showbook/{id}/',[bookController::class,'showdata']);