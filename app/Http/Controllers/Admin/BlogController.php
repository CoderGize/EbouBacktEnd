<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Show;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    public function show_blog()
    {
        $blog = Blog::latest()->paginate(10);

        $show = show::find(1);

        return view('admin.blog.show_blog', compact('blog', 'show'));
    }

    public function add_blog(Request $request)
    {
        $blog = new Blog();

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('blog', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('blog/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('blog/' . $imgname));

            $blog->img = $imgname;
        }

        $blog->title_en = $request->title_en;
        $blog->title_fr = $request->title_fr;
        $blog->link = $request->link;

        $blog->save();

        return redirect()->back()->with('message' , 'Blog Added');
    }

    public function update_blog(Request $request , $id)
    {
        $blog = Blog::find($id);

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('blog', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('blog/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('blog/' . $imgname));

            $blog->img = $imgname;
        }

        $blog->title_en = $request->title_en;
        $blog->title_fr = $request->title_fr;
        $blog->link = $request->link;

        $blog->save();

        return redirect()->back()->with('message' , 'Blog Updated');
    }

    public function delete_blog($id)
    {
        $blog = Blog::find($id);

        $blog->delete();

        return redirect()->back()->with('message' , 'Blog Deleted');

    }
}
