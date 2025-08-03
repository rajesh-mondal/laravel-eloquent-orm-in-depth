<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::post( '/create-brand', [DemoController::class, 'create'] );
Route::post( '/update-brand/{id}', [DemoController::class, 'update'] );
Route::post( '/create-update/{brandName}', [DemoController::class, 'updateOrCreate'] );
Route::get( '/delete-brand/{id}', [DemoController::class, 'delete'] );