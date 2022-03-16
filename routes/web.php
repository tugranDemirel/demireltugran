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

Route::name('home.')->prefix('home')->group(function (){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('setting')->name('setting.')->group(function (){
        Route::get('/', [App\Http\Controllers\admin\siteSetting\indexController::class, 'index'])->name('index');
        Route::post('/update/{id}', [App\Http\Controllers\admin\siteSetting\indexController::class, 'update'])->name('update');
    });
    Route::prefix('blog')->name('blog.')->group(function (){
        Route::get('/', [App\Http\Controllers\admin\blog\indexController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\admin\blog\indexController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\admin\blog\indexController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [App\Http\Controllers\admin\blog\indexController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [App\Http\Controllers\admin\blog\indexController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [App\Http\Controllers\admin\blog\indexController::class, 'delete'])->name('delete');
        Route::post('/data', [App\Http\Controllers\admin\blog\indexController::class, 'data'])->name('data');
    });
    Route::prefix('reference')->name('reference.')->group(function (){
        Route::get('/', [App\Http\Controllers\admin\reference\indexController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\admin\reference\indexController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\admin\reference\indexController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [App\Http\Controllers\admin\reference\indexController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [App\Http\Controllers\admin\reference\indexController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [App\Http\Controllers\admin\reference\indexController::class, 'delete'])->name('delete');
        Route::post('/data', [App\Http\Controllers\admin\reference\indexController::class, 'data'])->name('data');
    });
    Route::prefix('media')->name('media.')->group(function (){
        Route::get('/', [App\Http\Controllers\admin\socialMedia\indexController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\admin\socialMedia\indexController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\admin\socialMedia\indexController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [App\Http\Controllers\admin\socialMedia\indexController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [App\Http\Controllers\admin\socialMedia\indexController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [App\Http\Controllers\admin\socialMedia\indexController::class, 'delete'])->name('delete');
        Route::post('/data', [App\Http\Controllers\admin\socialMedia\indexController::class, 'data'])->name('data');
    });
});

