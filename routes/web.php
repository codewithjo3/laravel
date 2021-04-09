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


Route::post('/facultyread',[faController::class,'store']);
Route::post('/Studentread',[StudentController::class,'store']);
Route::post('/Busread',[BusController::class,'store']);
Route::post('/bookread',[BookController::class,'store']);


