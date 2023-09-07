<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class AdminTestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::get();
        return view('admin.testimonial_view', compact('testimonials'));
    }

    public function add()
    {
        return view('admin.testimonial_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:png,jpg,jpeg,gif',
            'name' => 'required',
            'designation' => 'required',
            'comments' => 'required'
        ]);

        $ext = $request->file('photo')->extension();
        $final_name = time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$final_name);

        $obj = new Testimonial();
        $obj->photo = $final_name;
        $obj->name = $request->name;
        $obj->designation = $request->designation;
        $obj->comments = $request->comments;
        $obj->save();

        return redirect()->back()->with('success', 'Testimonial is added successfully');
    }


    public function edit($id)
    {
        $testimonial = Testimonial::where('id',$id)->first();
        return view('admin.testimonial_edit', compact('testimonial'));
    }

    public function update(Request $request,$id)
    {
        $obj = Testimonial::where('id',$id)->first();

        if($request->hasFile('photo'))
        {
            $request->validate([
            'photo' => 'required|image|mimes:png,jpg,jpeg,gif'
            ]);

            unlink(public_path('uploads/'.$obj->photo));
            $ext = $request->file('photo')->extension();
            $final_name = time().'.'.$ext;
            $request->file('photo')->move(public_path('uploads/'),$final_name);
            
            $obj->photo = $final_name;
        }

        
        $obj->name = $request->name;
        $obj->designation = $request->designation;
        $obj->comments = $request->comments;
        $obj->update();

        return redirect()->back()->with('success', 'Testimonial is updated successfully');
    }

    public function delete($id)
    {
        $testimonial = Testimonial::where('id',$id)->first();
        unlink(public_path('uploads/'.$testimonial->photo));
        $testimonial->delete();

        return redirect()->back()->with('success', 'Testimonial is deleted successfully');
    }
}
