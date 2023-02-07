<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Admin\UserController;
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

Route::get('/jobs', [JobController::class, 'index'])->name(('jobs.index'));
Route::get('/jobs/create', [JobController::class,'create'])->name(('jobs.create'))->middleware(('auth'));
Route::post('/jobs', [JobController::class,'store'])->name(('jobs.store'))->middleware(('auth'));
Route::get('/jobs/{id}', [JobController::class,'show'])->name(('jobs.show'));
Route::delete('/jobs/{id}', [JobController::class,'destroy'])->name(('jobs.destroy'))->middleware(('auth'));

// Admin Routes
Route::prefix('admin')->middleware(['auth','auth.isAdmin'])->name('admin.')->group(function () {
    Route::resource('/users', UserController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
