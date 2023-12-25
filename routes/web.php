<?php

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Middleware\AdminOnly;
use App\Http\Middleware\RequireAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentAccountController;
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
Route::get('/produk/{slug}', [ProductController::class, 'show']);
Route::get('/search', [ProductController::class, 'search'])->name('product.search');

Route::middleware(RequireAuth::class)->group(function () {
    Route::controller(CartController::class)->group(function () {
        Route::get('/cart', 'getCartItems');
        Route::post('/cart', 'addToCart');
        Route::delete('/cart/{product_id}', 'removeFromCart');
    });
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

Route::middleware(RequireAuth::class)->group(function () {
    Route::controller(OrderController::class)->group(function () {
        Route::post('/order', 'store');
        Route::patch('/order/status', 'updateOrderStatus');
        Route::patch('/order/payment', 'updateOrderPayment');
    });
});

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
        Route::get('/', [DashboardController::class, 'index']);

        Route::controller(BannerController::class)->group(function () {
            Route::get('/banner', 'index');
            Route::get('/banner/tambah', 'create')->name('banner.create');
            Route::post('/banner', 'store')->name('banner.store');
            Route::get('/banner/{:id}', 'edit')->name('banner.edit');
            Route::patch('/banner/{banner:id}', 'update')->name('banner.update');
            Route::delete('/banner/{banner:id}', 'destroy')->name('banner.destroy');
        });

        Route::controller(ProductController::class)->group(function () {
            Route::get('/produk', 'index');
            Route::get('/produk/tambah', 'create');
            Route::post('/produk', 'store')->name('product.store');
            Route::get('/produk/{product:slug}', 'edit')->name('product.edit');
            Route::patch('/produk/{product:slug}', 'update');
            Route::delete('/produk/{product:slug}', 'destroy')->name('product.destroy');
        });

        Route::controller(OrderController::class)->group(function () {
            Route::get('/pesanan', 'index_admin');
            Route::get('/pesanan/{order_id}', 'show_admin');
        });

        Route::controller(CategoryController::class)->group(function () {
            Route::get('/kategori', 'index')->name('category');
            Route::post('/kategori', 'store');
            Route::delete('/kategori/{category:slug}', 'destroy')->name('category.destroy');
        });

        Route::controller(PaymentAccountController::class)->group(function () {
            Route::get('/rekening', 'index');
            Route::get('/rekening/tambah', 'create')->name('paymentaccount.create');
            Route::post('/rekening', 'store')->name('paymentaccount.store');
            Route::delete('/rekening/{paymentAccount}', 'destroy')->name('paymentaccount.destroy');
        });
    });
