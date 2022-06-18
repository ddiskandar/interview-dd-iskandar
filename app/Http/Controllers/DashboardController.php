<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;
use Modules\Contact\Entities\Contact;
use Modules\Password\Emails\SendResetPassword;
use Modules\Password\Jobs\EmailResetPassword;

class DashboardController extends Controller
{
    public function index()
    {
        // $user = User::first();

        // Mail::to($user)
        //     ->queue( new SendResetPassword($user));

        // return 'Finished';

        return Inertia::render('Home', [
            'name' => auth()->user()->name,
        ]);
    }
}
