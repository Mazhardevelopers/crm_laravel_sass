<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\ApplicantController;

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



Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    Route::get('', [RoutingController::class, 'index'])->name('root');
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
   
    Route::group(['prefix' => 'applicants'], function () {
        Route::get('', [ApplicantController::class, 'index'])->name('applicants.list');
        Route::get('create', [ApplicantController::class, 'create'])->name('applicants.create');
        Route::post('store', [ApplicantController::class, 'store'])->name('applicants.store');
        Route::get('uploadCv', [ApplicantController::class, 'uploadCv'])->name('applicants.uploadCv');
        Route::get('{id}', [ApplicantController::class, 'applicantDetails'])->name('applicants.details');
    });
    Route::get('getApplicants', [ApplicantController::class, 'getApplicants'])->name('applicants.getApplicants');

    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});

