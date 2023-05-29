<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

// Task 1: Request Validation
Route::post('/reg', [RegistrationController::class, 'FromRegistration']);

//Task 2: Request Redirect
Route::get('/home', function () {
    return redirect('/dashboard', 302);
});

// Task 3: Global Middleware

//Task 4: Route Middleware
Route::middleware(['Demo'])->group(function () {
    Route::get('/profile', [DemoController::class, 'DemoAction1']);
    Route::get('/settings', [DemoController::class, 'DemoAction2']);
});

// Task 5: Controller

Route::resource('product', ProductController::class);

// Task 6: Single Action Controller

Route::get('/contact ', ContactController::class);

// Task 7: Resource Controller
Route::resource('post', PostController::class);

//Task 8: Blade Template Engine
Route::get('/', function () {
    return view('welcome');
});