<?php

use App\Http\Controllers\Api\V1\Auth\RegistrationController;
use App\Http\Controllers\Api\V1\Profile\ShowProfileController;
use App\Http\Controllers\Api\V1\Profile\ShowSelfProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('/registration', RegistrationController::class)
        ->middleware('guest');
    Route::prefix('profile')->group(function () {
        Route::get('/{userId}', ShowProfileController::class);
        Route::get('/', ShowSelfProfileController::class)
            ->middleware('auth:sanctum');
    });
});
