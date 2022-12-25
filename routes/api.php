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
    Route::get('get/kader', [AuthController::class, 'fetchKader']);
    Route::post('update/kader', [AuthController::class, 'updateProfile']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('kader/change-password', [AuthController::class, 'changePassword']);

    //Pasien
    Route::post('register/pasien', [PasienController::class, 'registerPasien']);
    Route::post('pengukuran/pasien/{id}', [PasienController::class, 'perhitunganPasien']);
    Route::get('get/pasien/{search?}/{month?}/{year?}', [PasienController::class, 'getAllPasien']);
    Route::get('get/pasien/{id}', [PasienController::class, 'getPasienByID']);
    Route::post('update/pasien/{id}', [PasienController::class, 'updatePasien']);
    Route::post('medis/pasien/{id}', [PasienController::class, 'medisPasien']);
    Route::get('pasien/search/{data?}', [PasienController::class, 'searchPasien']);
    Route::get('pasien/filter/medis/{month?}', [PasienController::class, 'filterMedisBulanPasien']);
    Route::get('pasien/filter/{year?}', [PasienController::class, 'filterMedisTahunPasien']);
    Route::get('pasien/filter/pengukuran/{month?}', [PasienController::class, 'filterPengukuranBulanPasien']);
    Route::get('pasien/filter/{year?}', [PasienController::class, 'filterPengukuranTahunPasien']);

});



Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);