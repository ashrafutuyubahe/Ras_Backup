<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassMonitorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DiscplineAdminController;




//that's the welcome page
Route::get('/',[AuthController::class,'getAuth'])->name('Auth.login');




// ClassMonitorController routes
Route::get('/classmonitors', [ClassMonitorController::class, 'index'])->name('classmonitors.classmonitor');

// Report creation route
Route::get('classmonitors/report/create', [ClassMonitorController::class, 'CreateReport'])->name('report.create');

// Report history route
Route::get('classmonitors/report/history', [ClassMonitorController::class, 'ReportHistory'])->name('report.history');

// Manage class route
Route::get('classmonitors/manageClass', [ClassMonitorController::class, 'manageClass'])->name('manageClass');

// Settings route (Assuming you will create a settings method in ClassMonitorController)
Route::get('classmonitors/settings', [ClassMonitorController::class, 'ClassmonitorSettings'])->name('classmonitorSettings');
Route::get('/fetch-students-classmonitor', [ClassMonitorController::class, 'fetchStudentsForClassmonitor']);


// Logout route
Route::post('/logout', function () {

})->name('logout');



//Benon Dashboard
Route::get('/disciplineStaff',[DiscplineAdminController::class,'index'])->name('home');
Route::get('/disciplineStaff/manageclassmonitors',[DiscplineAdminController::class,'manageClassmonitors'])->name('manageClassmonitors');
Route::get('/disciplineStaff/manageReports',[DiscplineAdminController::class,'manageReports'])->name('manageReports');
Route::get('/disciplineStaff/manageClasses',[DiscplineAdminController::class,'manageClasses'])->name('manageClasses');
Route::get('/disciplineStaff/settings',[DiscplineAdminController::class,'showSettings'])->name('adminSettings');
Route::get('/fetch-students-admin', [DiscplineAdminController::class, 'fetchStudentsForAdmin']);




