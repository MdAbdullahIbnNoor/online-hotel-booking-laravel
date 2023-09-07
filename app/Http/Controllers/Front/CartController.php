<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class CartController extends Controller
{
    public function index()
    {
        $cart_data = Page::where('id',1)->first();
        return view('front.cart', compact('cart_data'));
    }
}