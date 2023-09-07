<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class AdminPageController extends Controller
{
    public function about()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_about', compact('page_data'));
    }

    public function about_update(Request $req)
    {
        $obj = Page::where('id',1)->first();

        $obj->about_heading = $req->about_heading;
        $obj->about_status = $req->about_status;
        $obj->about_content = $req->about_content;

        $obj->update();

        return redirect()->back()->with('success', 'About Page is updated successfully');
    }

    public function terms()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_terms', compact('page_data'));
    }

    public function terms_update(Request $req)
    {
        $obj = Page::where('id',1)->first();

        $obj->terms_heading = $req->terms_heading;
        $obj->terms_status = $req->terms_status;
        $obj->terms_content = $req->terms_content;

        $obj->update();

        return redirect()->back()->with('success', 'Terms & Condition is updated successfully');
    }

    public function room()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_room', compact('page_data'));
    }

    public function room_update(Request $request)
    {
        $obj = Page::where('id',1)->first();
        $obj->room_heading = $request->room_heading;
        $obj->update();

        return redirect()->back()->with('success', 'Room Data is updated successfully.');
    }

    public function contact()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_contact', compact('page_data'));
    }

    public function contact_update(Request $req)
    {
        $obj = Page::where('id',1)->first();

        $obj->contact_heading = $req->contact_heading;
        $obj->contact_map = $req->contact_map;
        $obj->contact_status = $req->contact_status;


        $obj->update();

        return redirect()->back()->with('success', 'Contact is updated successfully');
    }

    public function cart()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_cart', compact('page_data'));
    }

    public function cart_update(Request $req)
    {
        $obj = Page::where('id',1)->first();
        $obj->cart_heading = $req->cart_heading;
        $obj->cart_status = $req->cart_status;

        $obj->update();

        return redirect()->back()->with('success', 'Cart is updated successfully');
    }

    public function checkout()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_checkout', compact('page_data'));
    }

    public function checkout_update(Request $req)
    {
        $obj = Page::where('id',1)->first();
        $obj->checkout_heading = $req->checkout_heading;
        $obj->checkout_status = $req->checkout_status;

        $obj->update();

        return redirect()->back()->with('success', 'Checkout is updated successfully');
    }

    public function Payment()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_payment', compact('page_data'));
    }

    public function payment_update(Request $req)
    {
        $obj = Page::where('id',1)->first();
        $obj->payment_heading = $req->payment_heading;

        $obj->update();

        return redirect()->back()->with('success', 'Payment is updated successfully');
    }

    public function Signup()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_logup', compact('page_data'));
    }

    public function logup_update(Request $req)
    {
        $obj = Page::where('id',1)->first();
        $obj->logup_heading = $req->logup_heading;
        $obj->logup_status = $req->logup_status;
        $obj->update();

        return redirect()->back()->with('success', 'Signup is updated successfully');
    }

    public function Login()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_login', compact('page_data'));
    }

    public function login_update(Request $req)
    {
        $obj = Page::where('id',1)->first();
        $obj->login_heading = $req->login_heading;
        $obj->login_status = $req->login_status;
        $obj->update();

        return redirect()->back()->with('success', 'Login is updated successfully');
    }
}
