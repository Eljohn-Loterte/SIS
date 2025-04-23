<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudInfo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/homepage', [AuthController::class, 'login'], function () {
    request()->validate([
        'email' => 'required|email',
        'password' => 'required|min:8',
    ]);
});

Route::post('/enrollStudent', [StudInfo::class, 'store'])->name('enrollStudent');

Route::get('/enrollStudent', function () {
    return view('enrollStudent');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/studentInformation', [studInfo::class, 'index'])->name('studentInformation');

Route::get('/studentInfoSpecific/{id}', [studInfo::class, 'show'])->name('studentInfoSpecific');

Route::get('/studentInfoSpecific/{id}/edit', [StudInfo::class, 'edit'])->name('studentInfo.edit');

Route::put('/studentInfoSpecific/{id}', [studInfo::class, 'update'])->name('studentInfoSpecific');

Route::get('/gradeStudent', [studInfo::class, 'grade'])->name('gradeStudent');

Route::get('/grading/{id}', [studInfo::class, 'grading'])->name('grading');

Route::post('/grading/{id}', [StudInfo::class, 'updateGrade'])->name('grading.update');
