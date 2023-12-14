<?php

use App\Http\Middleware\AdminOnly;
use App\Http\Middleware\RequireAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Middleware\RedirectIfAuthenticated;

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

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::middleware(RedirectIfAuthenticated::class)->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'showLoginForm')->name('login.show');
        Route::post('/login', 'authenticate');
        Route::get('/register', 'showRegisterForm');
        Route::post('/register', 'register');
    });
});

Route::get('/order', [OrderController::class, 'store'])->middleware(
    RequireAuth::class
);

Route::prefix('profile')->group(function () {
    Route::get('/', function () {
        return view('pages.profileAccount');
    })->name('profile.account');

    Route::get('/transaction/{slug}', function () {
        return view('pages.transaction');
    })->name('profile.transaction');
});

Route::prefix('dashboard')
    ->middleware(AdminOnly::class)
    ->group(function () {
        Route::controller(ProductController::class)->group(function () {
            Route::get('/products', 'index');
            Route::get('/product/{product:slug}', 'show');
            Route::post('/product/{product:slug}', 'store');
            Route::patch('/product/{product:slug}', 'update');
            Route::delete('/product/{product:slug}', 'destroy');
        });

        Route::controller(CategoryController::class)->group(function () {
            Route::get('/categories', 'index');
            Route::get('/category/{category:slug}', 'show');
            Route::post('/category/{category:slug}', 'store');
            Route::patch('/category/{category:slug}', 'update');
            Route::delete('/category/{category:slug}/delete', 'destroy');
        });
    });
