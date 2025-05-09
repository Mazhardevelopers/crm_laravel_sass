<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\HeadOfficeController;
use App\Http\Controllers\ModuleNotesController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\SaleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

require __DIR__ . '/auth.php';

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login')->middleware('ip_address');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['prefix' => '/', 'middleware' => 'ip_address'], function () {
    Route::get('', [RoutingController::class, 'index'])->name('root');
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');

    Route::group(['prefix' => 'applicants'], function () {
        Route::get('', [ApplicantController::class, 'index'])->name('applicants.list');
        Route::get('create', [ApplicantController::class, 'create'])->name('applicants.create');
        Route::post('store', [ApplicantController::class, 'store'])->name('applicants.store');
        Route::get('edit', [ApplicantController::class, 'edit'])->name('applicants.edit');
        Route::post('update', [ApplicantController::class, 'update'])->name('applicants.update');
        Route::post('uploadCv', [ApplicantController::class, 'uploadCv'])->name('applicants.uploadCv');
        Route::get('history', [ApplicantController::class, 'applicantHistory'])->name('applicants.history');
    });
    Route::get('getApplicants', [ApplicantController::class, 'getApplicants'])->name('getApplicants');
    Route::get('getJobTitles', [ApplicantController::class, 'getJobTitles'])->name('getJobTitles');
    Route::post('storeShortNotes', [ApplicantController::class, 'storeShortNotes'])->name('storeShortNotes');

    Route::group(['prefix' => 'head-offices'], function () {
        Route::get('', [HeadOfficeController::class, 'index'])->name('head-offices.list');
        Route::get('create', [HeadOfficeController::class, 'create'])->name('head-offices.create');
        Route::post('store', [HeadOfficeController::class, 'store'])->name('head-offices.store');
        Route::get('edit', [HeadOfficeController::class, 'edit'])->name('head-offices.edit');
        Route::post('update', [HeadOfficeController::class, 'update'])->name('head-offices.update');
        Route::get('{id}', [HeadOfficeController::class, 'applicantDetails'])->name('head-offices.details');
    });
    Route::get('getHeadOffices', [HeadOfficeController::class, 'getHeadOffices'])->name('getHeadOffices');
    Route::post('storeHeadOfficeShortNotes', [ApplicantController::class, 'storeHeadOfficeShortNotes'])->name('storeHeadOfficeShortNotes');

    Route::group(['prefix' => 'units'], function () {
        Route::get('', [UnitController::class, 'index'])->name('units.list');
        Route::get('create', [UnitController::class, 'create'])->name('units.create');
        Route::post('store', [UnitController::class, 'store'])->name('units.store');
        Route::get('edit', [UnitController::class, 'edit'])->name('units.edit');
        Route::post('update', [UnitController::class, 'update'])->name('units.update');
        Route::get('{id}', [UnitController::class, 'applicantDetails'])->name('units.details');
    });
    Route::get('getUnits', [UnitController::class, 'getUnits'])->name('getUnits');

    Route::group(['prefix' => 'sales'], function () {
        Route::get('', [SaleController::class, 'index'])->name('sales.list');
        Route::get('create', [SaleController::class, 'create'])->name('sales.create');
        Route::post('store', [SaleController::class, 'store'])->name('sales.store');
        Route::get('edit', [SaleController::class, 'edit'])->name('sales.edit');
        Route::post('update', [SaleController::class, 'update'])->name('sales.update');
        Route::get('{id}', [SaleController::class, 'applicantDetails'])->name('sales.details');
    });
    Route::get('getSales', [SaleController::class, 'getSales'])->name('getSales');

    Route::post('module-notes/store', [ModuleNotesController::class, 'store'])->name('moduleNotes.store');
    Route::get('getModuleNotesHistory', [ModuleNotesController::class, 'getModuleNotesHistory'])->name('getModuleNotesHistory');

    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});
