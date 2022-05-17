<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| Custom Authentication Guards
|--------------------------------------------------------------------------
|
| You can define custom guards within config/auth.php
|
| In order to enable them you must create a new guard
| and update the $guards property within AuthServiceProvider
|
| You can use `php artisan make:guard ExampleGuard`
| to create a new guard class
|
| Route::middleware('auth:custom')
*/

// Route::middleware('auth:custom')->get('/user', function (Request $request) {
//     return $request->user();
// });

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
|
| We have predefined some authentication routes
| to help you get set up quicker
|
*/

use App\Http\Controllers\Api\AuthController;

Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:skeleton')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
});
