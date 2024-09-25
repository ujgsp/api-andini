<?php

use App\Http\Controllers\API\TmcController;
use App\Http\Controllers\API\ArmadaController;
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

// Rute API Tmc
Route::get('tmc', [TmcController::class, 'all']);
Route::get('tmc-perpage', [TmcController::class, 'index']);

// Rute API Tmc
Route::get('armada', [ArmadaController::class, 'index']);
