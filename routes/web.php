<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use Illuminate\Http\Request;

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

Route::get('/',[FormController::class,'index'])->middleware('guard');
Route::post('add-form',[FormController::class,'store']);
Route::get('/view',[FormController::class,'view']);
Route::get('trash',[FormController::class,'trash']);
Route::get('/register',[FormController::class,'register'])->middleware('guard');
Route::get('/delete/{id}',[FormController::class,'destory']);
Route::get('/restore/{id}',[FormController::class,'restore']);
Route::get('/permanentDelete/{id}',[FormController::class,'permanentDelete']);
Route::get('/edit/{id}',[FormController::class,'edit']);
Route::post('/update/{id}',[FormController::class,'update']);

Route::get('get-all-session',function(){
    $session = session()->all();
    p($session);});
Route::get('set-session',function(Request $request){
$request->session()->put('User_Name','Moeed');
$request->session()->put('User_ID','123');
$request->session()->flash('statsu','succcess');
return redirect('/');});

Route::get('destroy-session',function(Request $request){
    $request->session()->forget('User_Name');
    $request->session()->forget('User_ID');
    $request->session()->forget('user_name');
    return redirect('/');});
Route::get('no-access',function(){
    echo "You are not allowed to access the page";
    die;
});
Route::get('NoAccess',function(){
    echo "You have no right access the page";
    die;
});
Route::get('/login',function(){
    session()->put('User_Id',1);
    echo "Logged In";
    return redirect("/");
});

Route::get('/logout',function(){
    session()->forget('User_Id');
    return redirect("/");
});





