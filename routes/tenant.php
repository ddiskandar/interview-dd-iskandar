<?php

declare(strict_types=1);

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

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

    // Contacts

    Route::get('contacts', [ContactController::class, 'index'])
        ->name('contacts')
        ->middleware('auth');

    Route::get('contacts/create', [ContactController::class, 'create'])
        ->name('contacts.create')
        ->middleware('auth');

    Route::post('contacts', [ContactController::class, 'store'])
        ->name('contacts.store')
        ->middleware('auth');

    Route::get('contacts/{contact}/edit', [ContactController::class, 'edit'])
        ->name('contacts.edit')
        ->middleware('auth');

    Route::put('contacts/{contact}', [ContactController::class, 'update'])
        ->name('contacts.update')
        ->middleware('auth');

    Route::delete('contacts/{contact}', [ContactController::class, 'destroy'])
        ->name('contacts.destroy')
        ->middleware('auth');
});
