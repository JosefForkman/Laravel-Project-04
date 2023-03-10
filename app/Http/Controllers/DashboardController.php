<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //retrive the currently authenticated user
        $user = Auth::user();

        return view('dashboard', [
            'user' => $user
        ]);
    }
}
