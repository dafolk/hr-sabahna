<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeDataController;
use App\Http\Controllers\TeamEmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/admin/register', [AdminController::class, "register"]);
Route::post('/admin/login', [AdminController::class, "login"]);

Route::apiResources([
    'employees' => EmployeeController::class,
    'employeeDatas' => EmployeeDataController::class,
    'teamEmployees' => TeamEmployeeController::class,

]);
