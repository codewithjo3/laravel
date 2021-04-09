<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\faController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\BookController;

Route::get('/', [faController::class,'create']);
Route::get('/studentadd', [StudentController::class,'create']);
Route::get('/busadd', [BusController::class,'create']);
Route::get('/book', [BookController::class,'create']);
Route::get('/view', [faController::class,'index']);
Route::get('studentview',[StudentController::class,'index']);

Route::post('/facultyread',[faController::class,'store']);
Route::post('/Studentread',[StudentController::class,'store']);
Route::post('/Busread',[BusController::class,'store']);
Route::post('/bookread',[BookController::class,'store']);
Route::post('facultysearch',[faController::class,'search']);
Route::post('/facultyeditprocess/{id}',[faController::class,'update']);

Route::get('/faculty/{id}/edit',[faController::class,'edit']);