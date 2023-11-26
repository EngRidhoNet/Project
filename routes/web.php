<?php

use App\Http\Controllers\TickerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/tickers', 'App\Http\Controllers\TickerController@index');
// Route::get('/tickers/{ticker}', 'TickerController@show');



Route::get('/store-ticker-data', [TickerController::class, 'storeTickerData']);

Route::get('/', 'App\Http\Controllers\TickerController@showTicker');
