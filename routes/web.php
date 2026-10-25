<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampusController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/one-to-one', [CampusController::class, 'oneToOne']);
Route::match(['post', 'delete'], '/students/{id}/soft-delete', [CampusController::class, 'softDelete'])->name('students.softDelete');
Route::match(['post', 'delete'], '/students/{id}/force-delete', [CampusController::class, 'forceDelete'])->name('students.forceDelete');
Route::match(['post', 'delete'], '/students/{id}/restore', [CampusController::class, 'restore'])->name('students.restore');
Route::get('/one-to-many', [CampusController::class, 'oneToMany']);
Route::get('/many-to-many', [CampusController::class, 'manyToMany']);

