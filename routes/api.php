<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PenilaianController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\WaliController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('login', [AuthController::class, 'login']);
// Route::post('register', RegisterController::class);


// landing page
Route::get('landing', [PostController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/wali', [WaliController::class, 'index']);
Route::get("/penilaian/{bulan}/{tahun}", [PenilaianController::class, 'show']);