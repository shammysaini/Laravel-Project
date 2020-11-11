<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\MyController;


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

Route::get("sampledata",[MyController::class,'GetData']);
Route::post("addData",[MyController::class,'AddDisplay']);
Route::delete("deletestudent/{id}",[MyController::class,'deleteStu']);
Route::patch("updatestudent/{id}",[MyController::class,'updateStu']);
Route::get("getOneStudent/{id}",[MyController::class,'getOneStudent']);
