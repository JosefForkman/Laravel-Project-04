<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function getProdukt(string $ProdoktName)
    {
        // $ProdoktId = Str::replace("-", " ", $ProdoktName);
        return view('prodokt', ["product" => products::where('Name', $ProdoktName)->first()->comments]);
    }
}
