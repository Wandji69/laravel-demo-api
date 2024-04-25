<?php

use App\Http\Controllers\Api\ProjectsController;
use App\Http\Controllers\Api\StudentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Custom APIs
Route::controller(StudentsController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::controller([StudentsController::class])->group(function () {
        Route::get('profile', 'profile');
        Route::get('logout', 'logout');
    });

    Route::controller([ProjectsController::class])->group(function (){

    });
    Route::post('create-projects', [ProjectsController::class, '']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});