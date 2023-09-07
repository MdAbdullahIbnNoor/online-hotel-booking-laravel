<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class CheckoutController extends Controller
{
    public function index()
    {
        $checkout_data = Page::where('id',1)->first();
        return view('front.checkout', compact('checkout_data'));
    }
}