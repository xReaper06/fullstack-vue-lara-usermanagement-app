<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AuthController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::controller(UserController::class)->group(function () {
});


Route::controller(AuthController::class)->group(function () {
    Route::get('/image/{path}', 'getImage')->where('path', '.*');
    Route::post('/login', 'login');
    Route::post('/register', 'register');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::post('/logout', 'logout');
        Route::post('/checkUserifExist', 'checkUserifExist');
    });
    Route::controller(UserController::class)->group(function () {
        Route::get('/getInfo', 'getSelfInfo');
        Route::post('/getTask', 'getTask');
        Route::post('/insertNewTask', 'insertNewTask');
        Route::post('/doneTask', 'doneTask');
        Route::post('/removeTask', 'removeTask');
        Route::post('/changeProfile', 'changeProfile');
        Route::post('/updateUserInfo', 'updateUserInfo');
        Route::post('/changePass', 'changePass');
    });
});
