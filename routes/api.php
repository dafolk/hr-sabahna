<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectTeamController;
use App\Http\Controllers\TeamController;
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

Route::group(["middleware" => "token_valid"], function () {
    Route::post('/admin/logout', [AdminController::class, "logout"]);
    Route::apiResource("project", ProjectController::class);
    Route::apiResource("team", TeamController::class);
    Route::apiResource("project_team", ProjectTeamController::class);
});

Route::apiResources([
    'employees' => EmployeeController::class,
]);
