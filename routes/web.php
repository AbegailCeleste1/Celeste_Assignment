<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('layouts/show', function () {
    return view('layouts.show');
})->name('layouts.show');



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/resident/add',[ResidentController::class, 'addResident'])->name('addResident');

