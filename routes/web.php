<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AvailableCardsController;
use App\Http\Controllers\UsedCardsController;

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

Route::get('/', [PageController::class,'index']);

Route::get('/index',[PageController::class,'index'])->name('index');

Route::get('pageController',[PageController::class,'create']);



Route::get('/corrupted_cards',[PageController::class,'corruptedCards'])->name('corruptedCards');

Route::get('/inquiry',[PageController::class,'inquiry'])->name('inquiry');

Route::get('/paybill',[PageController::class,'paybill'])->name('paybill');

Route::get('/used_cards',[UsedCardsController::class,'index'])->name('usedCards');

Route::get('usedCardsDate',[UsedCardsController::class,'date']);

Route::get('/available_cards',[AvailableCardsController::class,'index'])->name('availableCards');

Route::get('availableCardsDate',[AvailableCardsController::class,'date']);

//

