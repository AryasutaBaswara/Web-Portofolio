<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('skills', SkillController::class);

// Routes untuk Portfolio CRUD
// Route::resource('portfolio', App\Http\Controllers\PortfolioController::class);

// // Routes untuk Skills CRUD
// Route::resource('skills', App\Http\Controllers\SkillController::class);
