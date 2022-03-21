<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/import', [App\Http\Controllers\EmployeeAttendanceController::class, 'import'])->name('import');
Route::get('/report', [App\Http\Controllers\EmployeeReportController::class, 'index'])->name('report');

Route::get('/download-pdf', [App\Http\Controllers\EmployeeReportController::class, 'downloadPdf'])->name('downloadPdf');

Route::get('/bangla', function () {
   \App\Models\EmployeeAttendance::create([
       'month'=>৫
   ]);
   return 'done';

});
