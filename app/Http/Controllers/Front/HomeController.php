<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Features;
use App\Models\Testimonial;
use App\Models\Post;
use App\Models\Room;

class HomeController extends Controller
{
    public function index()
    {
        $slide_data = Slide::get();
        $features_data = Features::get();
        $testimonial = Testimonial::get();
        $post_all = Post::orderBy('id','desc')->limit(3)->get();
        $room_all = Room::get();

        return view('front.home', compact('slide_data','features_data','testimonial','post_all','room_all'));
    }
} 
