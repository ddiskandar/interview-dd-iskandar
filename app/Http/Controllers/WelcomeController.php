<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Modules\Contact\Entities\Contact;
use Modules\Password\Jobs\EmailResetPassword;

class WelcomeController extends Controller
{
    public function index()
    {
        return 'Finished';
    }
}
