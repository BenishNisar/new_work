<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditsController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::get("/",[DashboardController::class,"index"])->name("welcome");
Route::post("/",[DashboardController::class,"store"])->name("welcome.store");
Route::delete("/welcome/delete/{id}",[DashboardController::class,"delete"])->name("welcome.delete");
Route::get("edit/{id}",[EditsController::class,"index"])->name("edit.index");
Route::put("edit/update/{id}",[EditsController::class,"update"])->name("edit.update");
Route::get("dashboard/admin/work",[WorkController::class,"index"])->name("dashboard.admin.work");
Route::get("/account/login",[AccountController::class,"index"])->name("Auth.accountlogin");
Route::post("/account/login/store",[AccountController::class,"store"])->name("Auth.accountlogin.store");
// Route::get("/login",[AccountController::class,"index"])->name("login");

Route::middleware(['auth'])->group(function(){
    Route::get("/dashboard",[AdminController::class,"index"])->name("Dashboard.admin.dashboard");

});
