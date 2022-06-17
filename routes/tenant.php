<?php

declare(strict_types=1);

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('login', [LoginController::class, 'create'])
        ->name('login')
        ->middleware('guest');

    Route::post('login', [LoginController::class, 'store'])
        ->name('login.store')
        ->middleware('guest');

    Route::delete('logout', [LoginController::class, 'destroy'])
        ->name('logout');

    // Contacts

    Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

});
