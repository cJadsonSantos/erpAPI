<?php

use \Illuminate\Support\Facades\Route;
use \App\Http\Controllers\cadastro\FranquiaController;

//Route::group(['prefix' => '/cadastro'], function () {
//    Route::resource('/franquias', FranquiaController::class);
//});

Route::prefix('/cadastro')->group(function () {
    Route::resource('/franquias', FranquiaController::class);
});
