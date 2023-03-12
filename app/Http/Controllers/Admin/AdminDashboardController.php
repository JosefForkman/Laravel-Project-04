<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = Admin::class;

        return view('adminDashboard', [
            'user' => $user
        ]);
    }
}
