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
    Route::get('/alldata', [TabelDataController::class, 'index'])->name('admin.alldata');
    Route::get('/alldata/create', [TabelDataController::class, 'createDataTki'])->name('admin.tki.create');
    Route::post('/alldata', [TabelDataController::class, 'storeData'])->name('admin.tki.store');
    Route::get('/alldata/{tki}', [TabelDataController::class, 'showDataTki'])->name('admin.tki.show');
    Route::get('/alldata/{tki}/edit', [TabelDataController::class, 'editDataTki'])->name('admin.tki.edit');
    Route::put('/alldata/{tki}', [TabelDataController::class, 'updateDataTki'])->name('admin.tki.update');
    Route::delete('/alldata/{tki}', [TabelDataController::class, 'destroy'])->name('admin.tki.destroy');
});
