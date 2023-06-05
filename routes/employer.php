<?php

use App\Http\Controllers\admin\EmployeesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;






Route::group(['prefix'=>'employer','middleware'=>'auth:employer'],function(){
    Route::get('/',[\App\Http\Controllers\employer\HomeController::class,'index'])->name('employer');
    Route::post('/logout',[\App\Http\Controllers\employer\Auth\LoginController::class,'logout'])->name('employer.logout');


});


Route::group(['prefix'=>'employer','middleware'=>'guest:employer'],function(){
    Route::get('login',[\App\Http\Controllers\employer\Auth\loginController::class,'show_login_view'])->name('employer.showlogin');
    Route::post('login',[\App\Http\Controllers\employer\Auth\loginController::class,'login'])->name('employer.login');


    Route::get("/register",  [\App\Http\Controllers\employer\Auth\RegisterController::class,'show_register_view'])->name('employer.showRegister');
    Route::post("/register",  [\App\Http\Controllers\employer\Auth\RegisterController::class,'register'])->name('employer.register');



});