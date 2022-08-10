<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::get('/',[FormController::class,'index']);
Route::post('add-form',[FormController::class,'store']);
Route::get('/view',[FormController::class,'view']);
Route::get('/register',[FormController::class,'register']);
Route::get('/delete/{id}',[FormController::class,'destory']);
Route::get('/edit/{id}',[FormController::class,'edit']);
Route::post('/update/{id}',[FormController::class,'update']);







