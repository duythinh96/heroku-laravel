<?php

use App\Http\Controllers\duythinh\CloudinaryController;
use App\Http\Controllers\duythinh\GuideController;
use App\Http\Controllers\duythinh\MainController;
use Illuminate\Support\Facades\Route;

Route::get('', [MainController::class, 'index']);

Route::prefix('guide')->group(function () {
    Route::get('', [GuideController::class, 'index']);
});

Route::prefix('cloudinary')->group(function () {
    Route::get('', [CloudinaryController::class, 'index']);
    Route::post('upload', [CloudinaryController::class, 'upload']);
});

Route::get('api', fn () => view('duythinh.api.index'))->name('duythinh.api.demo');
Route::get('api-multi', fn () => view('duythinh.api.period'))->name('duythinh.api.demo-multi');

Route::prefix('react-component')->group(function () {
    Route::get('combobox', function () {
        return view('duythinh.react-component.combobox');
    });
});

