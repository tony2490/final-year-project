<?php

use App\Mail\statusUpdate;
use App\Mail\statusUpdateMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\filteredModuleCodeController;
use App\Http\Controllers\adminFilteredModuleCodeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactsPageController;

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

Route::get('/welcomeUpdate', function () {
    Mail::send(new statusUpdateMail);
    return view('welcome');
});



// JOBS 
Route::get('/jobs', [JobController::class, 'index'])->name(('jobs.index'))->middleware((['auth', 'verified']));
Route::get('/jobs/create', [JobController::class,'create'])->name(('jobs.create'))->middleware(['auth','auth.isAdmin', 'verified']);
Route::post('/jobs', [JobController::class,'store'])->name(('jobs.store'))->middleware(['auth','auth.isAdmin', 'verified']);
Route::get('/jobs/moduleCode', [JobController::class, 'moduleCode'])->name(('jobs.moduleCode'))->middleware(['auth', 'verified']);

Route::get('/jobs/{id}', [JobController::class,'show'])->name(('jobs.show'))->middleware((['auth', 'verified']));
Route::delete('/jobs/{id}', [JobController::class,'destroy'])->name(('jobs.destroy'))->middleware(['auth','auth.isAdmin', 'verified']);

// --------------------------------------------------------------------------------

// student 
Route::post('/myApplications/moduleCode', [filteredModuleCodeController::class,'store'])->name(('filteredModuleCodes.store'))->middleware(['auth', 'verified']);
Route::post('/jobs/moduleCode', [filteredModuleCodeController::class,'jobStore'])->name(('filteredModuleCodes.jobStore'))->middleware(['auth', 'verified']);

// admin 
Route::post('/applications/moduleCode', [adminFilteredModuleCodeController::class,'store'])->name(('adminFilteredModuleCodes.store'))->middleware(['auth','auth.isAdmin', 'verified']);



// ------------------------------------------
// APPLICATIONS - ADMIN VIEW
Route::get('/applications', [ApplicationsController::class, 'index'])->name(('applications.index'))->middleware(['auth','auth.isAdmin', 'verified']);

// Filters Admin
Route::get('/applications/Accepted', [ApplicationsController::class, 'statusAcceptedAdmin'])->name(('applications.statusAccepted'))->middleware(['auth','auth.isAdmin', 'verified']);
Route::get('/applications/underReview', [ApplicationsController::class, 'underReviewAdmin'])->name(('applications.underReview'))->middleware(['auth','auth.isAdmin', 'verified']);
Route::get('/applications/offered', [ApplicationsController::class, 'offeredAdmin'])->name(('applications.offered'))->middleware(['auth','auth.isAdmin', 'verified']);
Route::get('/applications/withdrawn', [ApplicationsController::class, 'withdrawnAdmin'])->name(('applications.withdrawn'))->middleware(['auth','auth.isAdmin', 'verified']);
Route::get('/applications/unsuccessful', [ApplicationsController::class, 'unsucessfulAdmin'])->name(('applications.unsucessful'))->middleware(['auth','auth.isAdmin', 'verified']);
Route::get('/applications/assigned', [ApplicationsController::class, 'assignedAdmin'])->name(('applications.assigned'))->middleware(['auth','auth.isAdmin', 'verified']);

Route::get('/applications/moduleCode', [ApplicationsController::class, 'moduleCodeAdmin'])->name(('applications.moduleCode'))->middleware(['auth','auth.isAdmin', 'verified']);


// Filters Students 
Route::get('/myApplications/Accepted', [ApplicationsController::class, 'statusAcceptedStudent'])->name(('applications.statusAcceptedStudent'))->middleware(['auth', 'verified']);
Route::get('/myApplications/underReview', [ApplicationsController::class, 'statusUnderReviewStudent'])->name(('applications.statusUnderReviewStudent'))->middleware(['auth', 'verified']);
Route::get('/myApplications/offered', [ApplicationsController::class, 'statusOfferedStudent'])->name(('applications.statusOfferedStudent'))->middleware(['auth', 'verified']);
Route::get('/myApplications/withdrawn', [ApplicationsController::class, 'statusWithdrawnStudent'])->name(('applications.statusWithdrawnStudent'))->middleware(['auth', 'verified']);
Route::get('/myApplications/unsuccessful', [ApplicationsController::class, 'statusUnsuccessfulStudent'])->name(('applications.statusUnsuccessfulStudent'))->middleware(['auth', 'verified']);
Route::get('/myApplications/assigned', [ApplicationsController::class, 'statusAssignedStudent'])->name(('applications.statusAssignedStudent'))->middleware(['auth', 'verified']);


Route::get('/myApplications/moduleCode', [ApplicationsController::class, 'moduleCode'])->name(('applications.moduleCode'))->middleware(['auth', 'verified']);

// APPLICATIONS - STUDENT VIEW

Route::get('/applications/myApplications', [ApplicationsController::class, 'userShow'])->name(('applications.userShow'))->middleware((['auth', 'verified']));
Route::get('/applications/create', [ApplicationsController::class,'create'])->name(('applications.create'))->middleware((['auth', 'verified']));
Route::post('/applications', [ApplicationsController::class,'store'])->name(('applications.store'))->middleware((['auth', 'verified']));
Route::get('/applications/{id}', [ApplicationsController::class,'show'])->name(('applications.show'))->middleware(['auth','auth.isAdmin', 'verified']);
Route::get('/applications/edit/{id}', [ApplicationsController::class, 'edit'])->name(('applications.edit'))->middleware(['auth','auth.isAdmin', 'verified']);
Route::get('/applications/userResponse/{id}', [ApplicationsController::class, 'userResponse'])->name(('applications.userResponse'));
Route::patch('/applications/edit/{id}', [ApplicationsController::class, 'update'])->name(('applications.update'));

// -------------------------------------------------


Route::get('/contacts', [ContactsPageController::class, 'index'])->name(('contacts.index'))->middleware(('auth'));


Route::get('/faq', [FaqController::class, 'index'])->name(('faq.index'))->middleware(('auth'));







// Admin Routes
Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::resource('/users', UserController::class);
});

// Laravel Fortify 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
