<?php

use Illuminate\Http\Request;
use App\Http\Controllers\JirabcpController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getall', [JirabcpController::class, 'getJira'])->name('getJira');
Route::get('/getal', [JirabcpController::class, 'getJi'])->name('getJi');
Route::get('/getDate', [JirabcpController::class, 'getDate'])->name('getDate');
Route::get('/getD', [JirabcpController::class, 'getD'])->name('getD');