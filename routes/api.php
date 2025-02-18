<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {;

    Route::middleware(['verified'])->group(function () {
        Route::prefix('/team')->group(function () {

        });
    });

});
