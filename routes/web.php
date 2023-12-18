<?php

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Middleware\AdminOnly;
use App\Http\Middleware\RequireAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class)->name('home');

Route::get('/produk/{products:slug}', [ProductController::class, 'show'])->name(
    'product.detail'
);

Route::get('/cart', function () {
    return view('pages.cart');
});

Route::get('/search', [ProductController::class, 'search']);

Route::get('/demodashboard', function () {
    return view('pages.dashboard')->with('hideFooter', true);
});

Route::get('/kategori/{slug}', [CategoryController::class, 'show']);

Route::middleware(RedirectIfAuthenticated::class)->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/register', 'showRegisterForm');
        Route::post('/register', 'register');

        Route::get('/login', 'showLoginForm')->name('login.show');
        Route::post('/login', 'authenticate');

        Route::post('/logout', 'logout')
            ->name('logout')
            ->withoutMiddleware([RedirectIfAuthenticated::class]);
    });
});

// Route::get('/order', [OrderController::class, 'store'])->middleware(
//     RequireAuth::class
// );

Route::prefix('profile')
    ->middleware(RequireAuth::class)
    ->group(function () {
        Route::get('/', [AuthController::class, 'show'])->name('profile');
        Route::post('/', [AuthController::class, 'update'])->name(
            'profile.update'
        );

        Route::get('/orders/{slug}', [OrderController::class, 'index']);
        Route::get('/order/{id}', [OrderController::class, 'show'])->name(
            'order.detail'
        );
    });

Route::prefix('dashboard')
    ->middleware(AdminOnly::class)
    ->group(function () {
        Route::controller(ProductController::class)->group(function () {
            Route::get('/produk/{product:slug}', 'show');
            Route::post('/produk/{product:slug}', 'store');
            Route::patch('/produk/{product:slug}', 'update');
            Route::delete('/produk/{product:slug}', 'destroy');
        });

        Route::controller(CategoryController::class)->group(function () {
            Route::get('/kategori', 'index');
            Route::get('/kategori/{category:slug}', 'show');
            Route::post('/kategori/{category:slug}', 'store');
            Route::patch('/kategori/{category:slug}', 'update');
            Route::delete('/kategori/{category:slug}/delete', 'destroy');
        });
    });
