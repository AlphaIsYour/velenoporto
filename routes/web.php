<?php

use App\Models\Quotes;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('app', ['title' => 'Youralpha', 'projects' => Project::all(), 'quotes' => Quotes::all()]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/projects', [DashboardController::class, 'projects'])->name('projects')->middleware('auth');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store')->middleware('auth');
Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');
Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('projects.update');
