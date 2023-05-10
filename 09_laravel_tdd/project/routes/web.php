<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Raports;
use App\Http\Controllers\StockStatusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Scheduler;
use App\Http\Controllers\EmployeeScheduleController;
use App\Http\Controllers\RoomScheduleController;
use App\Http\Controllers\Products;
use App\Http\Controllers\Employees;
use App\Http\Controllers\Structures;
use App\Http\Controllers\myObject;
use App\Http\Controllers\StaffController;
use App\Http\Middleware\RoleMiddleware;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'App\Http\Middleware\RoleMiddleware:0'])->group(function () {
    Route::get('/employees', [Employees::class, 'show'])->name('employees');
})->middleware(['auth', 'verified']);

Route::middleware(['auth', 'App\Http\Middleware\RoleMiddleware:0'])->group(function () {
    Route::get('/structures', [Structures::class, 'show'])->name('structures');
})->middleware(['auth', 'verified']);

Route::middleware(['auth', 'App\Http\Middleware\RoleMiddleware:1'])->group(function () {
    Route::get('/scheduler', [Scheduler::class, 'show'])->name('scheduler');
})->middleware(['auth', 'verified']);

Route::middleware(['auth', 'App\Http\Middleware\RoleMiddleware:1, 2'])->group(function () {
    Route::get('/stockStatus', [StockStatusController::class, 'show'])->name('stockStatus');
})->middleware(['auth', 'verified']);

Route::middleware(['auth', 'App\Http\Middleware\RoleMiddleware:3'])->group(function () {
    Route::get('/employeeSchedule', [EmployeeScheduleController::class, 'show'])->name('employeeSchedule');
})->middleware(['auth', 'verified']);

Route::middleware(['auth', 'App\Http\Middleware\RoleMiddleware:3'])->group(function () {
    Route::get('/roomSchedule', [RoomScheduleController::class, 'show'])->name('roomSchedule');
})->middleware(['auth', 'verified']);

Route::middleware(['auth', 'App\Http\Middleware\RoleMiddleware:4'])->group(function () {
    Route::get('/products', [Products::class, 'show'])->name('products');
    Route::get('/products/create', [Products::class, 'create'])->name('products.create');
    Route::post('/products', [Products::class, 'store'])->name('products.store');
})->middleware(['auth', 'verified']);

Route::middleware(['auth', 'App\Http\Middleware\RoleMiddleware:0'])->group(function () {
    Route::get('/products', [Products::class, 'show'])->name('products');
})->middleware(['auth', 'verified']);

Route::middleware(['auth', 'App\Http\Middleware\RoleMiddleware:5'])->group(function () {
    Route::get('/raports', [Raports::class, 'show'])->name('raports');
})->middleware(['auth', 'verified']);

Route::middleware(['auth', 'App\Http\Middleware\RoleMiddleware:2'])->group(function () {
    Route::get('/mojobiekt', [myObject::class, 'show'])->name('mojobiekt');
})->middleware(['auth', 'verified']);


Route::get('/staff', 'App\Http\Controllers\StaffController@create')->name('staff');

Route::middleware(['auth', 'App\Http\Middleware\RoleMiddleware:0'])->group(function () {
    Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
    Route::post('/staff', [StaffController::class, 'store'])->name('staff.store');
    Route::delete('/staff', [StaffController::class, 'delete'])->name('staff.delete');
});

Route::get("/employee/{id}", [Employees::class,"profiles"]);

Route::get("/structures/{id}", [Structures::class,"facilities"]);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [StaffController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [StaffController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [StaffController::class, 'destroy'])->name('profile.destroy');
});


Route::put('/employee/change-role/{id}', 'App\Http\Controllers\Employees@changeRole');

require __DIR__.'/auth.php';
