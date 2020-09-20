<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
    return view('welcome');
});

Route::get('/index',[PageController::class,'index'])->name('index');

Route::get('pageController',[PageController::class,'create']);

Route::post('pageController',[PageController::class,'create']);

Route::get('/corrupted_cards',[PageController::class,'corruptedCards'])->name('corruptedCards');

Route::get('/inquiry',[PageController::class,'inquiry'])->name('inquiry');

Route::get('/paybill',[PageController::class,'paybill'])->name('paybill');

Route::get('/used_cards',[PageController::class,'usedCards'])->name('usedCards');

Route::get('/available_cards',[PageController::class,'availableCards'])->name('availableCards');
