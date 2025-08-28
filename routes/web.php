<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ImportDataController;
use App\Http\Controllers\TabelDataController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\TkiImportController;
use App\Http\Controllers\TkiImportExportController;

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
    /* All Data */
    Route::get('/alldata', [TabelDataController::class, 'index'])->name('admin.alldata');
    Route::get('/alldata/create', [TabelDataController::class, 'createDataTki'])->name('admin.tki.create');
    Route::post('/alldata', [TabelDataController::class, 'storeData'])->name('admin.tki.store');
    Route::get('/alldata/{tki}', [TabelDataController::class, 'showDataTki'])->name('admin.tki.show');
    Route::get('/alldata/{tki}/edit', [TabelDataController::class, 'editDataTki'])->name('admin.tki.edit');
    Route::put('/alldata/{tki}', [TabelDataController::class, 'updateDataTki'])->name('admin.tki.update');
    Route::delete('/alldata/{tki}', [TabelDataController::class, 'destroy'])->name('admin.tki.destroy');
    /* Compani Data */
    Route::get('/company', [CompanyController::class, 'index'])->name('admin.company');
    Route::get('/company/create', [CompanyController::class, 'create'])->name('admin.company.create');
    Route::post('/company', [CompanyController::class, 'store'])->name('admin.company.store');
    Route::get('/company/{company}', [CompanyController::class, 'show'])->name('admin.company.show');
    Route::get('/company/{company}/edit', [CompanyController::class, 'edit'])->name('admin.company.edit');
    Route::put('/company/{company}', [CompanyController::class, 'update'])->name('admin.company.update');
    Route::delete('/company/{company}', [CompanyController::class, 'destroy'])->name('admin.company.destroy');
    /* Destination */
    Route::get('destination', [DestinationController::class, 'index'])->name('admin.destination');
    Route::get('/destination/create', [DestinationController::class, 'create'])->name('admin.destination.create');
    Route::post('/destination', [DestinationController::class, 'store'])->name('admin.destination.store');
    Route::get('/destination/{destination}', [DestinationController::class, 'show'])->name('admin.destination.show');
    Route::get('/destination/{destination}/edit', [DestinationController::class, 'edit'])->name('admin.destination.edit');
    Route::put('/destination/{destination}', [DestinationController::class, 'update'])->name('admin.destination.update');
    Route::delete('/destination/{destination}', [DestinationController::class, 'destroy'])->name('admin.destination.destroy');
});

Route::post('/tki/import', [TkiImportController::class, 'import'])->name('tki.import');
Route::get('test', function() {
    return view('components.test');
})->middleware('isAdmin');
