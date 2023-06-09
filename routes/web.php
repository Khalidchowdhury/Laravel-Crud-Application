<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



// Create Route 
Route::get('/create', [ AuthController::class, 'showCreate' ]) -> name('showCreate.page');
Route::post('/create', [ AuthController::class, 'create' ]) -> name('create.page');
// Store Route
Route::get('/', [ AuthController::class, 'store']) -> name('store.page');
// View Route
Route::get('/view/{id}', [ AuthController::class, 'view' ]) -> name('view.page');
// Edit Route
Route::get('edit/{id}', [ AuthController::class, 'edit' ]) -> name('edit.page');
// Delete Route
Route::get('delete/{id}', [ AuthController::class, 'destroy' ]) -> name('delete.page');
// Update Route 
Route::post('update/{id}', [ AuthController::class, 'update' ]) -> name('update.page');








