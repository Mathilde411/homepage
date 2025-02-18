<?php

use Illuminate\Support\Facades\Route;

Route::view('/{route?}', 'index')->where('route', '.*');
