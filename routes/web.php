<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\TabelDataController;
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

// ! Logout
Route::post('/logout', [AuthController::class, 'logOut'])->name('logout');

Route::fallback(function () {
    return view('landingpage');
});

/*----------------------------------------------------------------------------
    ROUTE Dashboard admin
---------------------------------------------------------------------------*/
Route::middleware('isAdmin')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/tabledata',[TabelDataController::class, 'index'])->name('admin.tabeldata');
});
