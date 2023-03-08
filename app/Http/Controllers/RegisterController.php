<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // $this->validate(request(), [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);

        // $user = User::create(request(['name', 'email', 'password']));

        // auth()->login($user);

        // return redirect()->to('/welcome');

        // return "Hello World";

        $user = new User();
        $user->name  = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = $request->_token;
        $user->save();

        return redirect()->to('welcome');
    }
}
