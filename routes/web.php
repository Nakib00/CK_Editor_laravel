<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadCkeditorController;


Route::get('/', function () {
    return view('welcome');
});


Route::post('/store',[UploadCkeditorController::class, 'store'])->name('ckfinder.store');
Route::post('/upload', [UploadCkeditorController::class, 'uploadImage'])->name('ckfinder.upload');
Route::get('/show', [UploadCkeditorController::class, 'show'])->name('ckfinder.show');


