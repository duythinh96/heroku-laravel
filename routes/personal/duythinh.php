<?php

use App\Http\Controllers\duythinh\GuideController;
use Illuminate\Support\Facades\Route;

Route::prefix('guide')->group(function () {
    Route::get('', [GuideController::class, 'index']);
});
