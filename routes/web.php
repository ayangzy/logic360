<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Auth::routes();


Route::middleware(['auth'])->group(function(){
    Route::get('', [HomeController::class, 'index'])->name('home');

    Route::prefix('categories')->name('category.')->group(function(){
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/loadpartial', [CategoryController::class, 'loadpartial'])->name('loadpartial');
        Route::post('/', [CategoryController::class, 'store'])->name('store');
        Route::get('/upsert/{id}', [CategoryController::class, 'upsert'])->name('upsert');
        Route::post('/{id}', [CategoryController::class, 'update'])->name('update');
        Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    });
});

