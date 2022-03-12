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

Route::name('home')->prefix('home')->group(function (){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('site-ayarlari')->name('site-ayarlari')->group(function (){
        Route::get('/', [App\Http\Controllers\admin\siteSetting\indexController::class, 'index'])->name('index');
    });;
});

