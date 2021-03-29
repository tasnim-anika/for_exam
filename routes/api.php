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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/banks',[BankController::class, 'index']);

Route::prefix('/bank')->group(function(){
   Route::post('/store',[BankController::class,'store']);
   Route::put('/{id}',[BankController::class,'update']);
   Route::delete('/{id}',[BankController::class,'destroy']);
});
