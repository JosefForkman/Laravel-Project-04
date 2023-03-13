<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Bought;
use App\Models\Carts;
use Illuminate\Support\Facades\Auth;

class BoughtController extends Controller
{


    public function store(Request $request)
    {

        //depending on if the user clicks "buy" or "add_to_cart"
        switch ($request->input('action')) {

            case 'buy':
                //add to boughts table
                // dd($request);
                $item = new Bought();
                $item->products_id = $request->product_id;
                $item->users_id = Auth::id();
                $item->quantity = $request->quantity;
                $item->save();

                return redirect()->to('succesfully_bought');
                break;

            case 'add_to_cart';
                //add to Carts table
                // dd($request);
                $cart_item = new Carts();
                $cart_item->products_name = strval($request->products_name);
                $cart_item->products_id = $request->product_id;
                $cart_item->users_id = Auth::id();
                $cart_item->quantity = $request->quantity;
                $cart_item->price = $request->price;
                $cart_item->save();

                return redirect()->to('/');
        };
    }
}
