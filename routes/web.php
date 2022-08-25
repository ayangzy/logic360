<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\MarketController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Front\FrontendController;
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


Auth::routes();

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('market-products/{id}', [FrontendController::class, 'marketPrducts'])->name('market_product');


Route::middleware(['auth'])->group(function(){
    Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('home');
    Route::get('/getMarkets/{id}', [MarketController::class, 'getMarket'])->name('getMarket');
    Route::prefix('categories')->name('category.')->group(function(){
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/loadpartial', [CategoryController::class, 'loadpartial'])->name('loadpartial');
        Route::post('/', [CategoryController::class, 'store'])->name('store');
        Route::get('/upsert/{id}', [CategoryController::class, 'upsert'])->name('upsert');
        Route::post('/{id}', [CategoryController::class, 'update'])->name('update');
        Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('locations')->name('location.')->group(function(){
        Route::get('/', [LocationController::class, 'index'])->name('index');
        Route::get('/loadpartial', [LocationController::class, 'loadPartial'])->name('load_partial');
        Route::post('/', [LocationController::class, 'store'])->name('store');
        Route::get('/upsert/{id}', [LocationController::class, 'upsert'])->name('upsert');
        Route::post('/{id}', [LocationController::class, 'update'])->name('update');
        Route::delete('/{id}', [LocationController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('markets')->name('market.')->group(function(){
        Route::get('/', [MarketController::class, 'index'])->name('index');
        Route::get('/loadpartial', [MarketController::class, 'loadPartial'])->name('load_partial');
        Route::post('/', [MarketController::class, 'store'])->name('store');
        Route::get('/upsert/{id}', [MarketController::class, 'upsert'])->name('upsert');
        Route::post('/{id}', [MarketController::class, 'update'])->name('update');
        Route::delete('/{id}', [MarketController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('products')->name('product.')->group(function(){
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/loadpartial', [ProductController::class, 'loadPartial'])->name('load_partial');
        Route::post('/', [ProductController::class, 'store'])->name('store');
        Route::get('/upsert/{id}', [ProductController::class, 'upsert'])->name('upsert');
        Route::post('/{id}', [ProductController::class, 'update'])->name('update');
        Route::delete('/{id}', [ProductController::class, 'destroy'])->name('destroy');
    });

   
});

