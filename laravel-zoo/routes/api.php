<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrzavaController;
use App\Http\Controllers\ZooController;
use App\Http\Controllers\AuthController;

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
Route::get('/drzava/{drzava_id}', [DrzavaController::class, 'show']);
Route::get('/drzava', [DrzavaController::class, 'index']);
#Route::get('/zoo', [ZooController::class, 'index']);
Route::resource('zoo', ZooController::class);

Route::post('/register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

