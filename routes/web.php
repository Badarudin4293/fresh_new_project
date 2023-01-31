<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\AbsentController;
use App\Http\Controllers\EmployeeController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/developer',[DeveloperController::class,'index'])->name('Developer');
Route::get('/developer/create',[DeveloperController::class,'create']);
Route::post('/developer/store',[DeveloperController::class,'store']);
Route::get('/Absent',[AbsentController::class,'index'])->name('Absent');
Route::get('/Employee',[EmployeeController::class,'index'])->name('Employee');
Route::get('/create',[AbsentController::class,'create']);
