<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name(
    'login.show'
);
Route::post('/login', [AuthController::class, 'authenticate']);

<<<<<<< Updated upstream
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/profile', function () {
    return view('pages.profile');
=======
Route::prefix('profile')->group(function () {
    Route::get('/', function () {
        return view('pages.profileAccount');
    })->name('profile.account');

    Route::get('/transaction', function () {
        return view('pages.transaction');
    })->name('profile.transaction');

    Route::get('/transaction/waitingValidation', function () {
        return view('pages.waitingValidation');
    })->name('profile.transaction.waitingValidation');

    Route::get('/transaction/onGoing', function () {
        return view('pages.onGoing');
    })->name('profile.transaction.onGoing');

    Route::get('/transaction/done', function () {
        return view('pages.done');
    })->name('profile.transaction.done');
>>>>>>> Stashed changes
});
