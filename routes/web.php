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

Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/', [App\Http\Controllers\GuestController::class, 'welcomePage'])->name('welcome');
Route::get('/course_details/{slug}', [App\Http\Controllers\GuestController::class, 'courseDetails'])->name('course_details');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'course', 'as' => 'course.','middleware' => ['auth']], function () {

    Route::get('/', [App\Http\Controllers\CourseController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\CourseController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\CourseController::class, 'store'])->name('store');
    Route::get('/destroy/{id}', [App\Http\Controllers\CourseController::class, 'destroy'])->name('destroy');
    Route::get('/edit/{id}', [App\Http\Controllers\CourseController::class, 'edit'])->name('edit');
    Route::get('/add_details/{id}', [App\Http\Controllers\CourseDetailsController::class, 'addDetails'])->name('add_details');
    Route::post('/add_details', [App\Http\Controllers\CourseDetailsController::class, 'addDetailsDb'])->name('add_details_db');

});

// Route::resource('aboutform','App\Http\Controllers\CourseController')->middleware(['auth']);
Route::get('/about_form', [App\Http\Controllers\GuestController::class, 'aboutForm'])->name('about_form')->middleware(['auth']);
Route::post('/about_db', [App\Http\Controllers\GuestController::class, 'aboutDb'])->name('about_db')->middleware(['auth']);
Route::get('/certificate_form', [App\Http\Controllers\CertificateController::class, 'certificateForm'])->name('certificate_form')->middleware(['auth']);
Route::post('/certificate_form', [App\Http\Controllers\CertificateController::class, 'certificateDb'])->name('certificate_db')->middleware(['auth']);


Route::get('/certificate_verify', [App\Http\Controllers\CertificateController::class, 'verify'])->name('certificate_verify');
Route::post('/certificate_verify', [App\Http\Controllers\CertificateController::class, 'verifyCertificate'])->name('certificate_verify_post');

