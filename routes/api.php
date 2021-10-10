<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('store_user', [\App\Http\Controllers\API\UserController::class, 'storeUser'])->name('api.user.store');
Route::post('get_user', [\App\Http\Controllers\API\UserController::class, 'getUser'])->name('api.get.user');
Route::post('update_user', [\App\Http\Controllers\API\UserController::class, 'updateUser'])->name('api.update.user');
Route::post('delete_user', [\App\Http\Controllers\API\UserController::class, 'deleteUser'])->name('api.user.delete');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
