<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function getProdukt(string $ProdoktName)
    {
        return view('prodokt', ["product" => products::where('Name', $ProdoktName)->first()]);
    }

    public function postProdukt(Request $request)
    {

        $this->validate($request, [
            "comment" => "required"
        ]);

        if (!Auth::check()) {
            return redirect('/login_form')->withErrors("you need to be sign in");
        }

        $products_id = products::where('Name', $request->prodokt_Name)->get('id')->first();

        comment::create([
            'Content' => $request->comment,
            'users_id' => Auth::id(),
            'products_id' => $products_id->id
        ]);

        return back()->withInput();
    }
}
