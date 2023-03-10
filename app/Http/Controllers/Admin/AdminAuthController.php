<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function getLogin()
    {
        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);



        // $user = auth()->guard('admin')->user();
        // $user = request();
        $user = Admin::where("email", $request->email)->first();



        if (Hash::check($request->password, $user->password)) {
            if ($user->is_admin == 1) {
                // return redirect()->route('adminDashboard')->with('success', 'You are Logged in sucessfully.');
                return redirect('adminDashboard');
            } else {
                return back()->withErrors('error', 'Whoops! invalid email and password.');
            };
        } else {
            return "something went wrong";
        }
    }


    public function adminLogout(Request $request)
    {
        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('success', 'You are logout sucessfully');
        return redirect(route('adminLogin'));
    }
}
