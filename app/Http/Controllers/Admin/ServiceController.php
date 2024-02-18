<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    public function show_service()
    {
        $service = Service::latest()->paginate(10);

        return view('admin.service.show_service' , compact('service'));
    }

    public  function add_service(Request $request)
    {
       $service = new Service();


       $icon = $request->icon;


       if($icon)
       {
           $iconname = Str::random(20) . '.' . $icon->getClientOriginalExtension();

           //Save the original image
           $request->icon->move('service', $iconname);

           //change the image quality using Intervention Image
           $icon = Image::make(public_path('service/' . $iconname));

           $icon->encode($icon->extension, 10)->save(public_path('service/' . $iconname));

           $service->icon = $iconname;
       }

       $img = $request->img;


       if($img)
       {
           $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

           //Save the original image
           $request->img->move('service', $imgname);

           //change the image quality using Intervention Image
           $img = Image::make(public_path('service/' . $imgname));

           $img->encode($img->extension, 10)->save(public_path('service/' . $imgname));

           $service->img = $imgname;
       }

       $service->title_en = $request->titleen;
       $service->title_fr = $request->titlefr;
       $service->text_en = $request->texten;
       $service->text_fr = $request->textfr;

       $service->save();

       return redirect('admin/show_service')->with('message','Service Updated');

    }

    public function update_service($id)
    {
        $service = Service::find($id);

        return view('admin.service.update_service',compact('service'));
    }

    public function update_service_confirm(Request $request , $id)
    {
        $service = Service::find($id);

        $icon = $request->icon;


       if($icon)
       {
           $iconname = Str::random(20) . '.' . $icon->getClientOriginalExtension();

           //Save the original image
           $request->icon->move('service', $iconname);

           //change the image quality using Intervention Image
           $icon = Image::make(public_path('service/' . $iconname));

           $icon->encode($icon->extension, 10)->save(public_path('service/' . $iconname));

           $service->icon = $iconname;
       }

       $img = $request->img;


       if($img)
       {
           $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

           //Save the original image
           $request->img->move('service', $imgname);

           //change the image quality using Intervention Image
           $img = Image::make(public_path('service/' . $imgname));

           $img->encode($img->extension, 10)->save(public_path('service/' . $imgname));

           $service->img = $imgname;
       }

       $service->title_en = $request->title_en;
       $service->title_fr = $request->title_fr;
       $service->text_en = $request->text_en;
       $service->text_fr = $request->text_fr;

       $service->save();

       return redirect('admin/show_service')->with('message','Service Updated');
    }

    public function delete_service($id)
    {
        $service = Service::find($id);

        $service->delete();

        return redirect()->back()->with('message' , 'Service Deleted');
    }
}
