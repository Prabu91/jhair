<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/services', [ServiceController::class, 'index'])->name('services');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('project.detail');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.detail');

