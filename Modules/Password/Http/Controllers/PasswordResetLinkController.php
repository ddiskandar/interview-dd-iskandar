<?php

namespace Modules\Password\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Password\Emails\SendResetPassword;

class PasswordResetLinkController extends Controller
{

    public function create()
    {
       return view('password::forgot-password');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = \Str::random(64);

        \DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => now()
        ]);

        $user = User::where('email', $request->email)->first();

        $url = $request->getHttpHost();

        \Mail::to($user)->queue( new SendResetPassword($user, $url));

        return back()->with('status', 'We have e-mailed your password reset link!');
    }
}
