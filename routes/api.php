<?php

use App\Http\Controllers\Api\Authentication\ChangePasswordController;
use App\Http\Controllers\Api\Authentication\UpdateProfileController;
use App\Http\Controllers\Api\Authentication\UserLogin;
use App\Http\Controllers\Api\Authentication\UserRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('user-register', [UserRegister::class, 'register']);

Route::post('user-login', [UserLogin::class, 'login']);

Route::post('password/change', [ChangePasswordController::class, 'changePassword']) ;

Route::put('user/update', [UpdateProfileController::class, 'update']) ;
