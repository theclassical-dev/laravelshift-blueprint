<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('employee/test', [App\Http\Controllers\EmployeeController::class, 'test']);

// Route::get('employee/show-employee', [App\Http\Controllers\EmployeeController::class, 'showEmployee'])->name('employee.show');


Route::get('employee/test', [App\Http\Controllers\EmployeeController::class, 'test']);


Route::get('employee/test', [App\Http\Controllers\EmployeeController::class, 'test']);


Route::get('employee/test', [App\Http\Controllers\EmployeeController::class, 'test']);


Route::get('employee/test', [App\Http\Controllers\EmployeeController::class, 'test']);


Route::get('employee/test', [App\Http\Controllers\EmployeeController::class, 'test']);


Route::get('employee/test', [App\Http\Controllers\EmployeeController::class, 'test']);


Route::get('employee/test', [App\Http\Controllers\EmployeeController::class, 'test']);


Route::get('employee/test', [App\Http\Controllers\EmployeeController::class, 'test']);
