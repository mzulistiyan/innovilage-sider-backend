<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\PasienController;

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

Route::middleware('auth:sanctum')->group(function () {
    //Kader
    Route::get('get/pasien', [AuthController::class, 'fetchPasien']);
    Route::post('update/pasien', [AuthController::class, 'updateProfile']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('pasien/change-password', [AuthController::class, 'changePassword']);

    //Pasien
    Route::post('register/pasien', [PasienController::class, 'registerPasien']);
    Route::post('perhitungan/pasien/{id}', [PasienController::class, 'perhitunganPasien']);
    Route::get('get/pasien', [PasienController::class, 'getAllPasien']);
    Route::get('get/pasien/{id}', [PasienController::class, 'getPasienByID']);
    Route::post('update/pasien/{id}', [PasienController::class, 'updatePasien']);


});



Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);