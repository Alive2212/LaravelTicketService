<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('api')->group(function () {
    Route::prefix('v1')->group(function () {
        Route::prefix('alive')->group(function () {
            Route::prefix('ticket')->group(function () {
                Route::resource('','Alive2212\LaravelTicketService\Http\Controllers\AliveTicketController');
                Route::resource('message','Alive2212\LaravelTicketService\Http\Controllers\AliveTicketMessageController');
                Route::resource('category','Alive2212\LaravelTicketService\Http\Controllers\AliveTicketCategoryController');
            });
        });
    });
});

