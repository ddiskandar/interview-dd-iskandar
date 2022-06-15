<?php

use Illuminate\Support\Facades\Route;
use Modules\Contact\Http\Controllers\ContactController;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('contact', [ContactController::class, 'index'])
        ->name('contact')
        ->middleware('auth');

    Route::get('contact/create', [ContactController::class, 'create'])
        ->name('contact.create')
        ->middleware('auth');

    Route::post('contact', [ContactController::class, 'store'])
        ->name('contact.store')
        ->middleware('auth');

    Route::get('contact/{contact}/edit', [ContactController::class, 'edit'])
        ->name('contact.edit')
        ->middleware('auth');

    Route::put('contact/{contact}', [ContactController::class, 'update'])
        ->name('contact.update')
        ->middleware('auth');

    Route::delete('contact/{contact}', [ContactController::class, 'destroy'])
        ->name('contact.destroy')
        ->middleware('auth');
});



