<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ApplicationsController;
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

Route::get('/jobs', [JobController::class, 'index'])->name(('jobs.index'))->middleware(('auth'));
Route::get('/jobs/create', [JobController::class,'create'])->name(('jobs.create'))->middleware(['auth','auth.isAdmin']);
Route::post('/jobs', [JobController::class,'store'])->name(('jobs.store'))->middleware(['auth','auth.isAdmin']);
Route::get('/jobs/{id}', [JobController::class,'show'])->name(('jobs.show'))->middleware(('auth'));
Route::delete('/jobs/{id}', [JobController::class,'destroy'])->name(('jobs.destroy'))->middleware(['auth','auth.isAdmin']);


Route::get('/applications', [ApplicationsController::class, 'index'])->name(('applications.index'))->middleware(['auth','auth.isAdmin']);

// Filters
Route::get('/applications/statusAccepted', [ApplicationsController::class, 'statusAccepted'])->name(('applications.statusAccepted'))->middleware(['auth','auth.isAdmin']);
Route::get('/applications/underReview', [ApplicationsController::class, 'underReview'])->name(('applications.underReview'))->middleware(['auth','auth.isAdmin']);



Route::get('/applications/myApplications', [ApplicationsController::class, 'userShow'])->name(('applications.userShow'))->middleware(('auth'));
Route::get('/applications/create', [ApplicationsController::class,'create'])->name(('applications.create'))->middleware(('auth'));
Route::post('/applications', [ApplicationsController::class,'store'])->name(('applications.store'))->middleware(('auth'));
Route::get('/applications/{id}', [ApplicationsController::class,'show'])->name(('applications.show'))->middleware(['auth','auth.isAdmin']);
Route::get('/applications/edit/{id}', [ApplicationsController::class, 'edit'])->name(('applications.edit'))->middleware(['auth','auth.isAdmin']);
Route::get('/applications/userResponse/{id}', [ApplicationsController::class, 'userResponse'])->name(('applications.userResponse'));
Route::patch('/applications/edit/{id}', [ApplicationsController::class, 'update'])->name(('applications.update'));







// Admin Routes
Route::prefix('admin')->middleware(['auth','auth.isAdmin'])->name('admin.')->group(function () {
    Route::resource('/users', UserController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
