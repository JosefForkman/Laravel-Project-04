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
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // dd($credentials);
        // dd(auth()->guard('admin')->attempt($credentials));

        // $user = auth()->guard('admin')->user();
        // $user = request();
        // $user = Admin::where("email", $request->email)->first();
        // if (Hash::check($request->password, $user->password)) {
        //     if ($user->is_admin == 1) {
        //         // return redirect()->route('adminDashboard')->with('success', 'You are Logged in sucessfully.');
        //         return redirect()->route('adminDashboard')->with('success','You are Logged in sucessfully.');
        //     } else {
        //         return back()->withErrors('error', 'Whoops! invalid email and password.');
        //     };
        // } else {
        //     return back()->with('error','Whoops! invalid email and password.');
        // }

        if(auth()->guard('admin')->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])){
            $user = auth()->guard('admin')->user();
            if($user->is_admin == 1){
                return redirect()->route('adminDashboard')->with('success','You are Logged in sucessfully.');
                // return redirect('/admin/login')->with('success','You are Logged in sucessfully.');
            }
        }else {
            // return back()->with('error','Whoops! invalid email and password.');
            return redirect('/admin/login')->with('error','Whoops! invalid email and password.');
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
