<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EstablishmentController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'showRegister']);
Route::post('/register', [LoginController::class, 'register']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/companies/create', [CompanyController::class, 'create']);
    Route::post('/companies/store', [CompanyController::class, 'store']);
    Route::get('/companies/edit/{id}', [CompanyController::class, 'edit']);
    Route::post('/companies/update/{id}', [CompanyController::class, 'update']);
    Route::get('/companies/destroy/{id}', [CompanyController::class, 'destroy']);

    Route::get('/companies/{id}/establishment/create', [EstablishmentController::class, 'create']);
    Route::post('/companies/{id}/establishment/store', [EstablishmentController::class, 'store']);
    Route::get('/establishment/edit/{id}', [EstablishmentController::class, 'edit']);
    Route::post('/establishment/update/{id}', [EstablishmentController::class, 'update']);
    Route::get('/establishment/destroy/{id}', [EstablishmentController::class, 'destroy']);
});

Route::get('/', [CompanyController::class, 'index']);
Route::get('/companies/{id}/establishments', [CompanyController::class, 'show']);

