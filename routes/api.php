<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PemesananKamarController;

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

//public route
//Route::post('/register', [AuthController::class, 'register']);
//Route::post('/login', [AuthController::class, 'login']);

Route::get('/kamars', [KamarController::class, 'index']);
Route::post('/kamars', [KamarController::class, 'store']);
Route::get('/kamars/{id}', [KamarController::class, 'show']);
Route::put('/kamars/{id}', [KamarController::class, 'update']);
Route::delete('kamars/{id}', [KamarController::class, 'destroy']);

Route::resource('/payments', PaymentController::class)->except(
    ['create','edit']
);

Route::resource('/pemesanan', PemesananKamarController::class)->except(
    ['create','edit']
);
//Route for registering & logging in
Route::post('/register', [AccountController::class, 'register']);
Route::post('/login', [AccountController::class, 'login']);

//Private routes
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AccountController::class, 'logout']);
});
