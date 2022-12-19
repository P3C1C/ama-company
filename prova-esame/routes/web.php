<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ModelController;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'showRegister']);
Route::post('/register', [LoginController::class, 'register']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/brand/create', [BrandController::class, 'create']);
    Route::get('/brand/edit/{id}', [BrandController::class, 'edit']);
    Route::post('/brand/edit/update/{id}', [BrandController::class, 'update']);
    Route::post('/brand/create/store', [BrandController::class, 'store']);
    Route::get('/brand/delete/{id}', [BrandController::class, 'destroy']);


    Route::get('/brand/{brandId}/model/create', [ModelController::class, 'create']);
    Route::post('/brand/{brandId}/model/store', [ModelController::class, 'store']);
    Route::get('/model/edit/{id}', [ModelController::class, 'edit']);
    Route::post('/model/update/{id}', [ModelController::class, 'update']);
    Route::get('/model/delete/{id}', [ModelController::class, 'destroy']);


});

Route::get('/', [BrandController::class, 'index']);

Route::get('brand/{brandId}/models', [ModelController::class, 'index']);
