<?php

use Illuminate\Support\Facades\Route;
use Modules\Password\Http\Controllers\PasswordResetLinkController;
use Modules\Password\Http\Controllers\ResetPasswordController;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

Route::middleware([
    'guest',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('forgot.password.get');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('forgot.password.post');
    Route::get('reset-password/{token}', [ResetPasswordController::class, 'create'])->name('reset.password.get');
    Route::post('reset-password', [ResetPasswordController::class, 'store'])->name('reset.password.post');
});
