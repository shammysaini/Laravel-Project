<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('signup', function () {
    return view('signup');
});
//Route::view('login','lgn');
Route::get('login',[MyController::class,'show']);
Route::get('data',[MyController::class,'GetData']);
Route::get('/edit/{id}',[MyController::class,'EditExample']);
Route::get('/delete/{id}',[MyController::class,'delete']);
Route::post('ans',[MyController::class,'display']);
Route::post('ans1',[MyController::class,'MySave'])->name('post.update');
   