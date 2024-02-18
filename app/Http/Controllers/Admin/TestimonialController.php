<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\Show;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function show_testimonial()
    {
        $testimonial = Testimonial::latest()->paginate(10);

        $show = show::find(1);

        return view('admin.testimonial.show_testimonial' , compact('testimonial', 'show'));
    }

    public function add_testimonial(Request $request)
    {
        $testimonial = new Testimonial();

        $testimonial->text_en = $request->text_en;
        $testimonial->text_fr = $request->text_fr;
        $testimonial->name = $request->name;
        $testimonial->role_en = $request->role_en;
        $testimonial->role_fr = $request->role_fr;

        $testimonial->save();

        return redirect()->back()->with('message' , 'Testimonial Added');
    }

    public function update_testimonial(Request $request , $id)
    {
        $testimonial = Testimonial::find($id);

        $testimonial->text_en = $request->text_en;
        $testimonial->text_fr = $request->text_fr;
        $testimonial->name = $request->name;
        $testimonial->role_en = $request->role_en;
        $testimonial->role_fr = $request->role_fr;

        $testimonial->save();

        return redirect()->back()->with('message' , 'Testimonial Updated');

    }

    public function delete_testimonial($id)
    {
        $testimonial = Testimonial::find($id);

        $testimonial->delete();

        return redirect()->back()->with('message' , 'Testimonial Deleted');

    }
}
