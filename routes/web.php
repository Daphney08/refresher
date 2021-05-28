<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [
    App\Http\Controllers\DepartmentController::class,
    'department'
])->name('home');

Route::post('/save', [
    App\Http\Controllers\DepartmentController::class,
    'save'
])->name('save');

Route::get('/delete', [
    App\Http\Controllers\DepartmentController::class,
    'delete'
])->name('delete');