<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/team', [HomeController::class, 'team'])->name('team');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/advance-sweet-alert', [AdminController::class, 'advanceSweetAlert'])->name('advance-sweet-alert');
Route::get('/calendar', [AdminController::class, 'calendar'])->name('calendar');
Route::get('/form-elements', [AdminController::class, 'formElements'])->name('form-elements');
Route::get('/tables-datatable', [AdminController::class, 'tablesDatatable'])->name('tables-datatable');