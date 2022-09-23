<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FrontController;


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
    return view('course');
});
Route::redirect('/', '/course');
Route::get('course', [FrontController::class, 'course'])->name('course');
Route::get('course/{slug}', [FrontController::class, 'details'])->name('details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('admin/course', [CourseController::class, 'index'])->name('admin.index.course');
    Route::get('admin/add/course', [CourseController::class, 'create'])->name('admin.create.course');
    Route::post('admin/add/course/save', [CourseController::class, 'store'])->name('admin.add.course.store');
    Route::get('admin/edit/course/{id}', [CourseController::class, 'edit'])->name('admin.course.edit');
    Route::put('admin/update/course/save/{id}', [CourseController::class, 'update'])->name('admin.course.update');
    
});