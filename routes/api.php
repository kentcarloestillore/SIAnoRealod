<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AccountController;

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

Route::get('/students', [StudentController::class, 'index']);
Route::get('/student', [StudentController::class, 'store']);
Route::get('/student/create', [StudentController::class, 'create']);
Route::get('/student/close', [StudentController::class, 'close']);
Route::put('/student/{student}', [StudentController::class, 'update']);
Route::get('/student/del/{student}', [StudentController::class, 'delModal']);
Route::delete('/student/{student}', [StudentController::class, 'destroy']);
Route::get('/student/show/{student}', [StudentController::class, 'show']);
Route::get('/student/detail/{student}', [StudentController::class, 'detail']);
Route::get('/body', [StudentController::class, 'body']);
Route::get('/student/detail/accounts', [AccountController::class, 'index']);
