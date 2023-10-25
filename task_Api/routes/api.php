<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::post('/Login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/Register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::post('/Reset_password', [App\Http\Controllers\AuthController::class, 'reset'])->name('reset');


