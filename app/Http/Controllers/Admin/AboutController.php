<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    public function show_about()
    {
       $about = About::find(1);

       return view('admin.about.show_about',compact('about'));

    }

    public function update_about($id)
    {
        $about = About::find($id);

        return view( 'admin.about.update_about' , compact('about') );
    }

    public function update_about_confirm(Request $request,$id)
    {
        $about = About::find($id);

        $about->title_en = $request->title_en;
        $about->title_fr = $request->title_fr;

        $about->text_en = $request->text_en;
        $about->text_fr = $request->text_fr;

        $img1 = $request->img1;


        if($img1)
        {
            $img1name = Str::random(20) . '.' . $img1->getClientOriginalExtension();

            //Save the original image
            $request->img1->move('about', $img1name);

            //change the image quality using Intervention Image
            $img1 = Image::make(public_path('about/' . $img1name));

            $img1->encode($img1->extension, 10)->save(public_path('about/' . $img1name));

            $about->img1 = $img1name;
        }


        $img2 = $request->img2;


        if($img2)
        {
            $img2name = Str::random(20) . '.' . $img2->getClientOriginalExtension();

            //Save the original image
            $request->img2->move('about', $img2name);

            //change the image quality using Intervention Image
            $img2 = Image::make(public_path('about/' . $img2name));

            $img2->encode($img2->extension, 10)->save(public_path('about/' . $img2name));

            $about->img2 = $img2name;
        }

        $about->save();

        return redirect('/admin/show_about')->with('message','About Updated');

    }}
