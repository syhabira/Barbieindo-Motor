<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::resource(name: 'welcome', controller: HomeController::class);
Route::resource(name: 'about', controller: AboutController::class);
Route::resource(name: 'contact', controller: ContactController::class);
Route::resource(name: 'form', controller: FormController::class);
