<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/sireda');
});

//* Route Login
Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});

// * Public route
Route::prefix('sireda')->name('sireda.')->group(function () {
    Route::get('/', [LandingPageController::class, 'landingpage'])->name('landingpage');
});

// * Route auth admin
Route::middleware('isAdmin')->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admins.app');
    });
});


// ? Logout
Route::post('/logout', [AuthController::class, 'logOut'])->name('logout');


Route::fallback(function () {
    return view('landingpage');
});
