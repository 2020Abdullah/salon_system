<?php

use App\Http\Controllers\admin\EmployeesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleController;
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


// Route::get('/', function () {
//     return view('home');
// });


/* 
======================
admin routes
======================
*/
// Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

//     Route::middleware('guest')->group(function () {
//         Route::get("/register", [RegisterController::class, 'admin_show_form'])->name('register');
//         Route::post("/register", [RegisterController::class, 'admin_register'])->name('register');

//         Route::get("/login", [LoginController::class, 'admin_form_login'])->name('login');
//         Route::post("/login", [LoginController::class, 'admin_login'])->name('login');
//     });

//     Route::middleware('auth')->group(function () {
//         Route::get("/dashboard", [DashboardController::class, 'admin'])->name('dashboard');

//         // employee Routes
//         Route::get("employees", [EmployeesController::class, 'index'])->name('employee.index');
//         Route::get("employee/new", [EmployeesController::class, 'add'])->name('employee.add');
//         Route::post("employee/store", [EmployeesController::class, 'store'])->name('employee.store');
//         Route::get("employee/edit/{id}", [EmployeesController::class, 'edit'])->name('employee.edit');
//         Route::post("employee/update", [EmployeesController::class, 'update'])->name('employee.update');
//         Route::get("employee/destory/{id}", [EmployeesController::class, 'destory'])->name('employee.destory');
//     });
// });

// Route::post("/logout", [LoginController::class, 'logout'])->name('logout');

// /* 
// ======================
// google with login routes
// ======================
// */

// Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
// Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.valid');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
