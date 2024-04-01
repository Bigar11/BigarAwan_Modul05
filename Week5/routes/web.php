<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('/employees', 'EmployeeController@index')->name('employees.index');
Route::get('profile', ProfileController::class)->name('profile');
Route::resource('employees', EmployeeController::class);
