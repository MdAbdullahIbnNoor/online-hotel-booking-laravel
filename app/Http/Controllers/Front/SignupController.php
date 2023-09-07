<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class SignupController extends Controller
{
    public function index()
    {
        // $signup_data = Page::where('id',1)->first();
        // return view('front.signup', compact('signup_data'));
    }
}