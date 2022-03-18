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

Route::get('/', [App\Http\Controllers\front\home\indexController::class, 'index']);
Route::post('/contact', [App\Http\Controllers\front\home\indexController::class, 'contact'])->name('contact');

Auth::routes();

Route::name('home.')->prefix('home')->middleware('auth')->group(function (){
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

    Route::prefix('work')->name('work.')->group(function (){
        Route::get('/', [App\Http\Controllers\admin\work\indexController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\admin\work\indexController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\admin\work\indexController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [App\Http\Controllers\admin\work\indexController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [App\Http\Controllers\admin\work\indexController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [App\Http\Controllers\admin\work\indexController::class, 'delete'])->name('delete');
        Route::post('/data', [App\Http\Controllers\admin\work\indexController::class, 'data'])->name('data');
    });
    Route::prefix('contact')->name('contact.')->group(function (){
        Route::get('/', [App\Http\Controllers\admin\contact\indexController::class, 'index'])->name('index');
        Route::get('/answer/{id}', [App\Http\Controllers\admin\contact\indexController::class, 'answer'])->name('answer');
        Route::post('/answer/{id}', [App\Http\Controllers\admin\contact\indexController::class, 'send'])->name('send');
        Route::post('/data', [App\Http\Controllers\admin\contact\indexController::class, 'data'])->name('data');
    });
    Route::get('/logout', [App\Http\Controllers\admin\indexController::class, 'logout'])->name('logout');
});

