<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtmController;

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

Route::get('/', function () {
    return view('welcome');
});

// 口座開設
Route::post('/bankTrading/accountOpening', [AtmController::class, 'accountOpen']);

// トークン生成
Route::get('/createToken', [AtmController::class, 'createToken']);