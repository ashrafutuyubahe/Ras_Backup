<?php

use App\Http\Controllers\AuthControllerLogic;

Route::post('/register', [AuthControllerLogic::class, 'register']);
Route::post('/login', [AuthControllerLogic::class, 'login']);

Route::post('/logout', [AuthControllerLogic::class, 'logout'])->middleware('auth:api');
Route::get('/user', [AuthControllerLogic::class, 'user'])->middleware('auth:api');
