<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FrontController;
use UniSharp\LaravelFilemanager\Lfm;



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

Route::get('blog/{slug}', [FrontController::class, 'article_details'])->name('article_details');


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

    Route::get('admin/article', [ArticleController::class, 'index'])->name('admin.index.article');
    Route::get('admin/add/article', [ArticleController::class, 'create'])->name('admin.create.article');
    Route::post('admin/add/article/save', [ArticleController::class, 'store'])->name('admin.store.article');
    Route::get('admin/edit/article/{id}', [ArticleController::class, 'edit'])->name('admin.article.edit');
    Route::put('admin/update/article/save/{id}', [ArticleController::class, 'update'])->name('admin.article.update');
    
    
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth:sanctum']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});