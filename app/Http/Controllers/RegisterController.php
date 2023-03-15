<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validatedInput  = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = User::create([...$validatedInput, "password" => Hash::make($request->password)]);

        auth()->login($user);

        return redirect()->to('/');
    }
}
