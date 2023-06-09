<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; 
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostFileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

 
Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::resource('/dashboard/posts', DashboardPostFileController::class);
// Route::resource('/dashboard/posts{postfile:id}/hapus', DashboardPostFileController::class);
// Route::get('/dashboard/posts/{{ Storage::url($postfile->data_file)}}', [DashboardPostFileController::class, 'tampilData']);
// Route::put('/postfile/{id}', [DashboardPostFileController::class, 'edit']);
