<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PaymentController extends Controller
{
    public function index()
    {
        // $payment_data = Page::where('id',1)->first();
        // return view('front.payment', compact('payment_data'));
        return view('front.payment');
    }
}