<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserformController;

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

Route::apiResource('post', PostController::class);
Route::apiResource('userform', UserformController::class);
Route::apiResource('product', ProductController::class);

// Route::middleware('AuthenticatedMiddleware')->group(function (){
//     Route::get('/profile', ProfileController::class);
//     Route::get('/setting', SettingController::class);
// });

Route::post('/contract', ContactController::class);