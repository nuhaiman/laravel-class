<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\API\UserController;





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
Route::get('data',[dummyAPI::class,'getData']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('list',[DeviceController::class,'list']);
Route::get('list/{id?}',[DeviceController::class,'listparams']);
Route::post("add",[DeviceController::class,'add']);
Route::put("update",[HomeController::class,'update']);
Route::get('search/{name}',[DeviceController::class,'search']);
Route::delete('delete/{id}',[DeviceController::class,'delete']);
Route::post("save",[DeviceController::class,'testData']);
Route::apiResource("member",MemberController::class);
Route::post("/member/store",[MemberController::class,'store']);
Route::post("upload",[FileController::class,'upload']);
Route::post("login",[UserController::class,'loginUser']);

Route::group(['middleware' => 'auth:sanctum'],function(){
    Route::get("user",[UserController::class,'userDetails']);
    Route::get('logout',[UserController::class,'logout']);
});