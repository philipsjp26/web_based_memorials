<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemorialsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Notes: if you using blader template, make routes direction to your section
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::group(['prefix' => 'memorial', 'middleware' => 'isLogin'], function () {
    Route::post('/create', [MemorialsController::class, 'create']);
});

Route::prefix('/home')->group(function () {
    Route::get('/list', [HomeController::class, 'pageList']);
    Route::get('/create', [HomeController::class, 'pageCreate'])->middleware('isLogin');
    Route::get('/detail/{id}',[HomeController::class, 'pageDetail']);
    Route::post('/create', [HomeController::class, 'createMemorial']);
});
Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'pageLogin']);
    Route::get('forgotPassword', [AuthController::class, 'pageForgotPassword']);
    Route::get('register', [AuthController::class, 'pageRegister']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
