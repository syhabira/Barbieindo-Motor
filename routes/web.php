<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CarController;

Route::resource(name: 'welcome', controller: HomeController::class);
Route::resource(name: 'about', controller: AboutController::class);
Route::resource(name: 'contact', controller: ContactController::class);
Route::resource(name: 'form', controller: FormController::class);
Route::resource(name: 'motor', controller: MotorController::class);
Route::resource(name: 'mobil', controller: MobilController::class);
Route::resource(name: 'car', controller: CarController::class);
