<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

Route::get('/', [RouteController::class, 'index']);

Route::get('/form', [RouteController::class, 'form']);

Route::get('/welcome', [RouteController::class, 'welcome']);

Route::get('/data', [RouteController::class, 'data']);



