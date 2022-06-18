<?php

declare(strict_types=1);

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Modules\Password\Http\Controllers\ForgotPasswordController;
use Modules\Password\Http\Controllers\PasswordResetLinkController;
use Modules\Password\Http\Controllers\ResetPasswordController;
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

    Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('forgot.password.get');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('forgot.password.post');

    Route::get('reset-password/{token}', [ResetPasswordController::class, 'create'])->name('reset.password.get');
    Route::post('reset-password', [ResetPasswordController::class, 'store'])->name('reset.password.post');

});
