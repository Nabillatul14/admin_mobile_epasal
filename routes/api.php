<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostfileApiController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return 'helooworld';
});

Route::get('/dashboard', [PostfileApiController::class, 'index']);

Route::get('/pemiluUUD', [PostfileApiController::class, 'pemiluUndangUndang']);
Route::get('/pemiluPerbawaslu', [PostfileApiController::class, 'pemiluPerbawaslu']);
Route::get('/pemiluKeputusan', [PostfileApiController::class, 'pemiluKeputusan']);
Route::get('/pemilihanUUD', [PostfileApiController::class, 'pemilihanUndangUndang']);
Route::get('/pemilihanPerbawaslu', [PostfileApiController::class, 'pemilihanPerbawaslu']);
Route::get('/pemilihanKeputusan', [PostfileApiController::class, 'pemilihanKeputusan']);