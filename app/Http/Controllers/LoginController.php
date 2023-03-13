<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        # Get Email and password
        $credentials = $request->only(['email', 'password']);

        # Check if user is a valid user
        if (Auth::attempt($credentials)) {
            return Redirect('dashboard');
        }

        return back()->withErrors('Wrong login credentials');
    }
}
