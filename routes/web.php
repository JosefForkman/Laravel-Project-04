<?php

use App\Models\product;
use App\Models\products;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['prodokts' => products::all()]);
});

Route::get("/prodokt/{ProdoktName}", function(string $ProdoktName) {
    return view('prodokt');
});
