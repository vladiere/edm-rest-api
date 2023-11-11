<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/user/get', [UserController::class, 'index']);
Route::post('/user/add', [UserController::class, 'store']);
Route::post('/user/update', [UserController::class, 'update']);
Route::post('/user/delete', [UserController::class, 'delete']);
