<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\StudentRecordController;

Route::get('student_records/create', [StudentRecordController::class, 'create'])->name('student_records.create');
Route::post('student_records', [StudentRecordController::class, 'store'])->name('student_records.store');
