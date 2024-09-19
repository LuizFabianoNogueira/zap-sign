<?php

use Illuminate\Support\Facades\Route;
use LuizFabianoNogueira\ZapSign\Http\Controllers\ZapSignController;

Route::controller(ZapSignController::class)->prefix('sse')->group(function () {
    Route::get('/connect/{userId}', 'connect')->name('sse.connect');
    Route::get('/generateFakeData/{userId}', 'generateFakeData')->name('sse.generateFakeData');
    Route::post('/', 'send')->name('sse.send');
});
