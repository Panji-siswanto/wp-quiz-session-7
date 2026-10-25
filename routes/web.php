<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampusController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/one-to-one', [CampusController::class, 'oneToOne']);
Route::get('/one-to-many', [CampusController::class, 'oneToMany']);
Route::get('/many-to-many', [CampusController::class, 'manyToMany']);

