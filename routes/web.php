<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\SupperAdmin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('sign-in', fn() => view('auth.login'))->name('login');
Route::get('login', fn() => view('auth.login'))->name('login');

Route::any('logout', [AuthController::class, 'logout']);
Route::post('login', [AuthController::class, 'signIn']);

/**
 * PUBLIC SITE
 */
Route::get('/welcome', [MainController::class, 'welcome'])->name('index');

Route::middleware(Authenticate::class)->group(function () {

});

/**
 * ADMINISTRATION
 */
Route::middleware(SupperAdmin::class)->group(function () {
    Route::get('/example', [ExampleController::class, 'example']);

    Route::get('/', fn() => view('app'));
    Route::get('/{any}', fn() => view('app'))->where("any", '.*');

    Route::post('api/query', [ApiController::class, 'query'])->name('query');
    Route::post('api/const', [ApiController::class, 'const'])->name('const');
    Route::post('api/mutate', [ApiController::class, 'mutate'])->name('mutate');
});
