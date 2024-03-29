<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClaimMemorialController;
use App\Http\Controllers\CustomerTransactionsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemorialsController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\TransactionImagesController;
use App\Models\CustomerTransactions;
use App\Models\PaymentMethods;
use App\Models\TransactionImages;
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

//  == Route Dashboard ==
Route::get('/dashboard/login', [DashboardController::class, 'login'])->name('dashboardLogin');
Route::group(['prefix' => 'admin', 'middleware' => 'isAdmin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dashboard/transactions', [DashboardController::class, 'transactions']);
    Route::get('/dashboard/memorials', [DashboardController::class, 'memorials']);
    Route::get('/profile/{id}', [DashboardController::class, 'profile_detail']);
    Route::get('/download/{filename}', [DashboardController::class, 'download']);
    Route::get('/list/bank', [PaymentMethodController::class, 'index']);
    Route::post('/create/bank', [PaymentMethodController::class, 'create']);
    Route::put('/update/bank/{id}', [PaymentMethodController::class, 'update']);
    Route::delete('/destroy/bank/{id}', [PaymentMethodController::class, 'delete']);
    Route::delete('/destroy/account/{id}', [DashboardController::class, 'deleteAccount']);
});
// == End of line Route Dashboard

Route::group(['prefix' => 'transaction', 'middleware' => 'isLogin'], function () {
    Route::post('/create', [CustomerTransactionsController::class, 'create']);
    Route::put('/update/{id}', [CustomerTransactionsController::class, 'update']);
    Route::delete('/destroy/{id}', [CustomerTransactionsController::class, 'delete']);
});


Route::group(['prefix' => 'memorial', 'middleware' => 'isLogin'], function () {
    Route::post('/create', [MemorialsController::class, 'create']);
    Route::post('/add/images/{id}', [MemorialsController::class, 'addMoreImages']);
    Route::put('/update/{id}', [MemorialsController::class, 'update']);
    Route::delete('/destroy/{id}', [MemorialsController::class, 'delete']);
});

Route::group(['prefix' => 'feature', 'middleware' => 'isLogin'], function () {
    Route::get('/freemium', [HomeController::class, 'pageFreemium']);
});

Route::group(['prefix' => 'reviews'], function () {
    Route::post('/create', [ReviewsController::class, 'create']);
});

Route::prefix('/home')->group(function () {
    Route::get('/list', [HomeController::class, 'pageList']);
    Route::get('/search', [HomeController::class, 'searching'])->name('search');
    Route::get('/features', [HomeController::class, 'pagePlanAndFeatures'])->middleware('isLogin');
    Route::get('/create', [HomeController::class, 'pageCreate'])->middleware('isLogin');
    Route::get('/detail/{id}', [HomeController::class, 'pageDetail']);
    Route::get('/myaccount', [HomeController::class, 'pageMyAccount'])->middleware('isLogin');
    Route::post('/create', [HomeController::class, 'createMemorial']);
    Route::post('/claim', [ClaimMemorialController::class, 'create'])->middleware('isLogin');
});
Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'pageLogin']);
    Route::get('forgotPassword', [AuthController::class, 'pageForgotPassword']);
    Route::get('register', [AuthController::class, 'pageRegister']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::group(['prefix' => 'upload', 'middleware' => 'isLogin'], function () {
    Route::get('/download/{transaction_id}', [TransactionImagesController::class, 'download']);
    Route::post('/{transaction_id}', [TransactionImagesController::class, 'upload']);
});
