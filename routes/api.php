<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::post( '/create-brand', [DemoController::class, 'create'] );
Route::post( '/update-brand/{id}', [DemoController::class, 'update'] );
Route::post( '/create-update/{brandName}', [DemoController::class, 'updateOrCreate'] );
Route::get( '/delete-brand/{id}', [DemoController::class, 'delete'] );

Route::get( '/get-all', [DemoController::class, 'getAll'] );
Route::get( '/single-row', [DemoController::class, 'singleRow'] );
Route::get( '/column-list', [DemoController::class, 'columnList'] );

Route::get( '/incre-decrement', [DemoController::class, 'increDecrement'] );
Route::get( '/aggregate', [DemoController::class, 'aggregate'] );

Route::get( '/select', [DemoController::class, 'select'] );
Route::get( '/where', [DemoController::class, 'whereClause'] );
Route::get( '/advance-where', [DemoController::class, 'advanceWhere'] );

Route::get( '/orderBy', [DemoController::class, 'orderBy'] );
Route::get( '/groupBy', [DemoController::class, 'groupHaving'] );
Route::get( '/paginate', [DemoController::class, 'paginate'] );