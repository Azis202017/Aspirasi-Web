<?php

use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListAspirasiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AspirasiController::class,'index']);
Route::post('/store',[AspirasiController::class,'store'])->name('aspirasi.store');
Route::get('/profile',[ProfileController::class,'index']);
Route::get('/list-aspirasi/{id}',[AspirasiController::class,'aspirasi']);
Route::get('/admin/feedback/{id}',[AspirasiController::class,'feedback']);

// Route::get('/', function() {
//     return view('welcome');
// });
Route::get('admin/list-aspirasi',[ListAspirasiController::class,'index'])->name('admin.list-aspirasi');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::get('admin/list-aspirasi/{id}',[ListAspirasiController::class,'update']);
Route::get('admin/list-aspirasi/drop/{id}',[ListAspirasiController::class,'drop']);
Route::post('admin/feedback',[ListAspirasiController::class,'create']);
Route::get('admin/history',[ListAspirasiController::class,'history'])->name('admin.history-aspirasi');