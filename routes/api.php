<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/list/{id?}',[ApiController::class,'api']);
Route::post('/data',[ApiController::class,'addData']);
Route::put('/updata',[ApiController::class,'updateData']);
Route::get('/search/{name}',[ApiController::class,'search']);
Route::delete('/delete/{id}',[ApiController::class,'destroy']);


