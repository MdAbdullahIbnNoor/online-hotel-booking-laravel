<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class SigninController extends Controller
{
    public function index()
    {
        $login_data = Page::where('id',1)->first();
        return view('front.login', compact('login_data'));
    }
}
